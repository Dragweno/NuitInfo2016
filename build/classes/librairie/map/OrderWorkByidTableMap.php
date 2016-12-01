<?php



/**
 * This class defines the structure of the 'order_work_byid' table.
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
class OrderWorkByidTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'librairie.map.OrderWorkByidTableMap';

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
        $this->setName('order_work_byid');
        $this->setPhpName('OrderWorkByid');
        $this->setClassname('OrderWorkByid');
        $this->setPackage('librairie');
        $this->setUseIdGenerator(false);
        $this->setIsCrossRef(true);
        // columns
        $this->addForeignPrimaryKey('history_id', 'HistoryId', 'INTEGER' , 'history', 'id', true, null, null);
        $this->addForeignPrimaryKey('work_id', 'WorkId', 'INTEGER' , 'work', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('History', 'History', RelationMap::MANY_TO_ONE, array('history_id' => 'id', ), null, null);
        $this->addRelation('Work', 'Work', RelationMap::MANY_TO_ONE, array('work_id' => 'id', ), null, null);
    } // buildRelations()

} // OrderWorkByidTableMap
