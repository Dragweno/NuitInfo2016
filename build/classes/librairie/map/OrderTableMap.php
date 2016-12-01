<?php



/**
 * This class defines the structure of the 'order' table.
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
class OrderTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'librairie.map.OrderTableMap';

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
        $this->setName('order');
        $this->setPhpName('Order');
        $this->setClassname('Order');
        $this->setPackage('librairie');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('total_price', 'TotalPrice', 'FLOAT', false, null, null);
        $this->addColumn('Nb_Work', 'NbWork', 'INTEGER', false, null, null);
        $this->addColumn('date_Payement', 'DatePayement', 'DATE', false, null, null);
        $this->addForeignKey('user_id', 'UserId', 'INTEGER', 'user', 'id', true, null, null);
        $this->addForeignKey('work_id', 'WorkId', 'INTEGER', 'work', 'id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), null, null);
        $this->addRelation('Work', 'Work', RelationMap::MANY_TO_ONE, array('work_id' => 'id', ), null, null);
    } // buildRelations()

} // OrderTableMap
