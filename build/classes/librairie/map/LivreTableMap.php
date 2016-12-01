<?php



/**
 * This class defines the structure of the 'livre' table.
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
class LivreTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'librairie.map.LivreTableMap';

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
        $this->setName('livre');
        $this->setPhpName('Livre');
        $this->setClassname('Livre');
        $this->setPackage('librairie');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('titre', 'Titre', 'VARCHAR', true, 255, null);
        $this->getColumn('titre', false)->setPrimaryString(true);
        $this->addColumn('isbn', 'ISBN', 'VARCHAR', true, 24, null);
        $this->addColumn('prix', 'Prix', 'FLOAT', false, null, null);
        $this->addColumn('description', 'Description', 'VARCHAR', false, 2048, null);
        $this->addColumn('photo', 'Photo', 'VARCHAR', false, 2048, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // LivreTableMap
