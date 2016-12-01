<?php



/**
 * This class defines the structure of the 'user' table.
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
class UserTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'elsewhere.map.UserTableMap';

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
        $this->setName('user');
        $this->setPhpName('User');
        $this->setClassname('User');
        $this->setPackage('elsewhere');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('firstname', 'Firstname', 'VARCHAR', true, 255, null);
        $this->addColumn('address', 'Address', 'VARCHAR', true, 1024, null);
        $this->addColumn('postal_code', 'PostalCode', 'VARCHAR', true, 5, null);
        $this->addColumn('city', 'City', 'VARCHAR', true, 128, null);
        $this->addColumn('civility', 'Civility', 'VARCHAR', true, 4, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 128, null);
        $this->addColumn('password', 'Password', 'VARCHAR', true, 32, null);
        $this->addColumn('date_joined', 'DateJoined', 'DATE', true, null, null);
        $this->addColumn('date_update', 'DateUpdate', 'DATE', true, null, null);
        $this->addColumn('date_lastlog', 'DateLastlog', 'DATE', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('History', 'History', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null, 'Historys');
    } // buildRelations()

} // UserTableMap
