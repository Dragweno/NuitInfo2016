<?php



/**
 * This class defines the structure of the 'history' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.elsewhere.map
 */
class HistoryTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'elsewhere.map.HistoryTableMap';

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
        $this->setName('history');
        $this->setPhpName('History');
        $this->setClassname('History');
        $this->setPackage('elsewhere');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('total_price', 'TotalPrice', 'FLOAT', false, null, null);
        $this->addColumn('Nb_Work', 'NbWork', 'INTEGER', false, null, null);
        $this->addColumn('date_Payement', 'DatePayement', 'DATE', false, null, null);
        $this->addForeignKey('user_id', 'UserId', 'INTEGER', 'user', 'id', true, null, null);
        $this->addColumn('work_id', 'WorkId', 'INTEGER', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), null, null);
        $this->addRelation('OrderWorkByid', 'OrderWorkByid', RelationMap::ONE_TO_MANY, array('id' => 'history_id', ), null, null, 'OrderWorkByids');
        $this->addRelation('Work', 'Work', RelationMap::MANY_TO_MANY, array(), null, null, 'Works');
    } // buildRelations()

} // HistoryTableMap
