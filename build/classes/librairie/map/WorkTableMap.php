<?php



/**
 * This class defines the structure of the 'work' table.
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
class WorkTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'librairie.map.WorkTableMap';

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
        $this->setName('work');
        $this->setPhpName('Work');
        $this->setClassname('Work');
        $this->setPackage('librairie');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('title', 'Title', 'VARCHAR', true, 255, null);
        $this->getColumn('title', false)->setPrimaryString(true);
        $this->addColumn('description', 'Description', 'VARCHAR', false, 2048, null);
        $this->addColumn('height', 'Height', 'INTEGER', true, null, null);
        $this->addColumn('width', 'Width', 'INTEGER', true, null, null);
        $this->addColumn('price', 'Price', 'FLOAT', true, null, null);
        $this->addColumn('filename', 'Filename', 'VARCHAR', true, 100, null);
        $this->addColumn('filesize', 'Filesize', 'FLOAT', true, null, null);
        $this->addColumn('stock', 'Stock', 'INTEGER', true, null, null);
        $this->addColumn('rate', 'Rate', 'FLOAT', true, null, null);
        $this->addColumn('date_post', 'DatePost', 'DATE', true, null, null);
        $this->addForeignKey('artist_id', 'ArtistId', 'INTEGER', 'artist', 'id', true, null, null);
        $this->addForeignKey('category_id', 'CategoryId', 'INTEGER', 'category', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Artist', 'Artist', RelationMap::MANY_TO_ONE, array('artist_id' => 'id', ), null, null);
        $this->addRelation('Category', 'Category', RelationMap::MANY_TO_ONE, array('category_id' => 'id', ), null, null);
        $this->addRelation('OrderWorkByid', 'OrderWorkByid', RelationMap::ONE_TO_MANY, array('id' => 'work_id', ), null, null, 'OrderWorkByids');
        $this->addRelation('History', 'History', RelationMap::MANY_TO_MANY, array(), null, null, 'Historys');
    } // buildRelations()

} // WorkTableMap
