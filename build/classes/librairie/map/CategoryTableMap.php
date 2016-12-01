<?php



/**
 * This class defines the structure of the 'category' table.
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
class CategoryTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'librairie.map.CategoryTableMap';

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
        $this->setName('category');
        $this->setPhpName('Category');
        $this->setClassname('Category');
        $this->setPackage('librairie');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 50, null);
        $this->addColumn('description', 'Description', 'VARCHAR', false, 1024, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Work', 'Work', RelationMap::ONE_TO_MANY, array('id' => 'category_id', ), null, null, 'Works');
    } // buildRelations()

} // CategoryTableMap
