<?php



/**
 * This class defines the structure of the 'client' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.librairie.map
 */
class ClientTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'librairie.map.ClientTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('client');
        $this->setPhpName('Client');
        $this->setClassname('Client');
        $this->setPackage('librairie');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 255, null);
        $this->addColumn('prenom', 'Prenom', 'VARCHAR', true, 255, null);
        $this->addColumn('adresse', 'Adresse', 'VARCHAR', false, 1024, null);
        $this->addColumn('tel', 'Tel', 'NUMERIC', false, 10, null);
        $this->addColumn('codePostal', 'Codepostal', 'VARCHAR', false, 5, null);
        $this->addColumn('sexe', 'Sexe', 'VARCHAR', false, 1, null);
        $this->addColumn('login', 'Login', 'VARCHAR', true, 25, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 1024, null);
        $this->addColumn('pass', 'Pass', 'VARCHAR', true, 25, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ClientTableMap
