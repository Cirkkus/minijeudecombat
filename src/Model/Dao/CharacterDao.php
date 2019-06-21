<?php

namespace MiniJeu\Model\Dao;

use MiniJeu\Model\Dal\Dal;
use \PDO;

class CharacterDao extends Dal
{
    private $classname = "MiniJeu\\Model\\Classes\\Character";
    private $table = "characters";
    private $structure = ['id', 'name', 'life', 'strength', 'level'];

    public function getAll()
    {
        $query = "SELECT * 
                  FROM `{$this->table}`;
                  ";
        $this->Open();
        $stmt = $this->dbh->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $this->classname, $this->structure);
        $rows = $stmt->fetchAll();
        $this->Close();
        return $rows;
    }

    public function insert($name, $life, $strength, $level)
    {
      

        $query = "INSERT INTO `{$this->table}`
                  (`name`, `life`, `strength`, `level`)
                  VALUES
                  (:name, :life, :strength, :level);
                  ";

        $this->Open();
        $query->execute();
        return $query;
       
    }

    /**
     * Mise à jour d'un Character
     * @param int $id identifiant
     * @param string $name name
     * @param int $life 
     * @param int $strength 
     * @param int $level 
     */
    public function update ($id, $name, $life, $strength, $level)
    {
        global $debugMode;

        if (empty($level))
        {
            $query = "UPDATE `{$this->table}`
                        SET
                            `name` = :name,
                            `life` = :life,
                            `strength` = :strength
                        WHERE `id` = :id; 
                    ";
        }
        else
        {
            $query = "UPDATE `{$this->table}`
                        SET
                            `name` = :name,
                            `life` = :life,
                            `strength` = :strength,
                            `level` = :level
                        WHERE `id` = :id; 
                    ";
        }

        $this->Open();
        $stmt = $this->dbh->prepare($query);

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":life", $life, PDO::PARAM_INT);
        $stmt->bindParam(":strength", $strength, PDO::PARAM_INT);
        if (!empty($level))
        {
            $stmt->bindParam(":level", $level, PDO::PARAM_INT);        
        }

        $nbRows = $stmt->execute();

        if ($debugMode && $nbRows != 1)
        {
            echo '<div class="alert alert-danger" role="alert">' . "\n";
            echo $stmt->errorInfo()[2];
            echo '</div>' . "\n";
        }

        $this->Close();
        return $nbRows;
    }

    /**
     * Suppression d'un Character
     * @param int $id identifiant de l'Character
     */
    public function delete ($id)
    {
        global $debugMode;

        $query = "DELETE FROM `{$this->table}`
                  WHERE `id` = :id; 
                ";

        $this->Open();
        $stmt = $this->dbh->prepare($query);

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $nbRows = $stmt->execute();

        if ($debugMode && $nbRows != 1)
        {
            echo '<div class="alert alert-danger" role="alert">' . "\n";
            echo $stmt->errorInfo()[2];
            echo '</div>' . "\n";
        }

        $this->Close();
        return $nbRows;
    }
}