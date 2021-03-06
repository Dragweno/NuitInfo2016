<?php


/**
 * Base class that represents a row from the 'history' table.
 *
 *
 *
 * @package    propel.generator.elsewhere.om
 */
abstract class BaseHistory extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'HistoryPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        HistoryPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the total_price field.
     * @var        double
     */
    protected $total_price;

    /**
     * The value for the nb_work field.
     * @var        int
     */
    protected $nb_work;

    /**
     * The value for the date_payement field.
     * @var        string
     */
    protected $date_payement;

    /**
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * The value for the work_id field.
     * @var        int
     */
    protected $work_id;

    /**
     * @var        User
     */
    protected $aUser;

    /**
     * @var        PropelObjectCollection|OrderWorkByid[] Collection to store aggregation of OrderWorkByid objects.
     */
    protected $collOrderWorkByids;
    protected $collOrderWorkByidsPartial;

    /**
     * @var        PropelObjectCollection|Work[] Collection to store aggregation of Work objects.
     */
    protected $collWorks;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $worksScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $orderWorkByidsScheduledForDeletion = null;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [total_price] column value.
     * orderTotalPrice
     * @return double
     */
    public function getTotalPrice()
    {

        return $this->total_price;
    }

    /**
     * Get the [nb_work] column value.
     * orderNbWork
     * @return int
     */
    public function getNbWork()
    {

        return $this->nb_work;
    }

    /**
     * Get the [optionally formatted] temporal [date_payement] column value.
     * datePayement
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatePayement($format = '%x')
    {
        if ($this->date_payement === null) {
            return null;
        }

        if ($this->date_payement === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_payement);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_payement, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [user_id] column value.
     * user_id
     * @return int
     */
    public function getUserId()
    {

        return $this->user_id;
    }

    /**
     * Get the [work_id] column value.
     * work_id
     * @return int
     */
    public function getWorkId()
    {

        return $this->work_id;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return History The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = HistoryPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [total_price] column.
     * orderTotalPrice
     * @param  double $v new value
     * @return History The current object (for fluent API support)
     */
    public function setTotalPrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->total_price !== $v) {
            $this->total_price = $v;
            $this->modifiedColumns[] = HistoryPeer::TOTAL_PRICE;
        }


        return $this;
    } // setTotalPrice()

    /**
     * Set the value of [nb_work] column.
     * orderNbWork
     * @param  int $v new value
     * @return History The current object (for fluent API support)
     */
    public function setNbWork($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nb_work !== $v) {
            $this->nb_work = $v;
            $this->modifiedColumns[] = HistoryPeer::NB_WORK;
        }


        return $this;
    } // setNbWork()

    /**
     * Sets the value of [date_payement] column to a normalized version of the date/time value specified.
     * datePayement
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return History The current object (for fluent API support)
     */
    public function setDatePayement($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_payement !== null || $dt !== null) {
            $currentDateAsString = ($this->date_payement !== null && $tmpDt = new DateTime($this->date_payement)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_payement = $newDateAsString;
                $this->modifiedColumns[] = HistoryPeer::DATE_PAYEMENT;
            }
        } // if either are not null


        return $this;
    } // setDatePayement()

    /**
     * Set the value of [user_id] column.
     * user_id
     * @param  int $v new value
     * @return History The current object (for fluent API support)
     */
    public function setUserId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->user_id !== $v) {
            $this->user_id = $v;
            $this->modifiedColumns[] = HistoryPeer::USER_ID;
        }

        if ($this->aUser !== null && $this->aUser->getId() !== $v) {
            $this->aUser = null;
        }


        return $this;
    } // setUserId()

    /**
     * Set the value of [work_id] column.
     * work_id
     * @param  int $v new value
     * @return History The current object (for fluent API support)
     */
    public function setWorkId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->work_id !== $v) {
            $this->work_id = $v;
            $this->modifiedColumns[] = HistoryPeer::WORK_ID;
        }


        return $this;
    } // setWorkId()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->total_price = ($row[$startcol + 1] !== null) ? (double) $row[$startcol + 1] : null;
            $this->nb_work = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->date_payement = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->user_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->work_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = HistoryPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating History object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aUser !== null && $this->user_id !== $this->aUser->getId()) {
            $this->aUser = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(HistoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = HistoryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUser = null;
            $this->collOrderWorkByids = null;

            $this->collWorks = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(HistoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = HistoryQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(HistoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                HistoryPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aUser !== null) {
                if ($this->aUser->isModified() || $this->aUser->isNew()) {
                    $affectedRows += $this->aUser->save($con);
                }
                $this->setUser($this->aUser);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->worksScheduledForDeletion !== null) {
                if (!$this->worksScheduledForDeletion->isEmpty()) {
                    $pks = array();
                    $pk = $this->getPrimaryKey();
                    foreach ($this->worksScheduledForDeletion->getPrimaryKeys(false) as $remotePk) {
                        $pks[] = array($pk, $remotePk);
                    }
                    OrderWorkByidQuery::create()
                        ->filterByPrimaryKeys($pks)
                        ->delete($con);
                    $this->worksScheduledForDeletion = null;
                }

                foreach ($this->getWorks() as $work) {
                    if ($work->isModified()) {
                        $work->save($con);
                    }
                }
            } elseif ($this->collWorks) {
                foreach ($this->collWorks as $work) {
                    if ($work->isModified()) {
                        $work->save($con);
                    }
                }
            }

            if ($this->orderWorkByidsScheduledForDeletion !== null) {
                if (!$this->orderWorkByidsScheduledForDeletion->isEmpty()) {
                    OrderWorkByidQuery::create()
                        ->filterByPrimaryKeys($this->orderWorkByidsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->orderWorkByidsScheduledForDeletion = null;
                }
            }

            if ($this->collOrderWorkByids !== null) {
                foreach ($this->collOrderWorkByids as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = HistoryPeer::ID;

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(HistoryPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(HistoryPeer::TOTAL_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'total_price';
        }
        if ($this->isColumnModified(HistoryPeer::NB_WORK)) {
            $modifiedColumns[':p' . $index++]  = 'Nb_Work';
        }
        if ($this->isColumnModified(HistoryPeer::DATE_PAYEMENT)) {
            $modifiedColumns[':p' . $index++]  = 'date_Payement';
        }
        if ($this->isColumnModified(HistoryPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'user_id';
        }
        if ($this->isColumnModified(HistoryPeer::WORK_ID)) {
            $modifiedColumns[':p' . $index++]  = 'work_id';
        }

        $sql = sprintf(
            'INSERT INTO history (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'total_price':
                        $stmt->bindValue($identifier, $this->total_price, PDO::PARAM_STR);
                        break;
                    case 'Nb_Work':
                        $stmt->bindValue($identifier, $this->nb_work, PDO::PARAM_INT);
                        break;
                    case 'date_Payement':
                        $stmt->bindValue($identifier, $this->date_payement, PDO::PARAM_STR);
                        break;
                    case 'user_id':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case 'work_id':
                        $stmt->bindValue($identifier, $this->work_id, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        if ($pk !== null) {
            $this->setId($pk);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aUser !== null) {
                if (!$this->aUser->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
                }
            }


            if (($retval = HistoryPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collOrderWorkByids !== null) {
                    foreach ($this->collOrderWorkByids as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = HistoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getTotalPrice();
                break;
            case 2:
                return $this->getNbWork();
                break;
            case 3:
                return $this->getDatePayement();
                break;
            case 4:
                return $this->getUserId();
                break;
            case 5:
                return $this->getWorkId();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['History'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['History'][$this->getPrimaryKey()] = true;
        $keys = HistoryPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getTotalPrice(),
            $keys[2] => $this->getNbWork(),
            $keys[3] => $this->getDatePayement(),
            $keys[4] => $this->getUserId(),
            $keys[5] => $this->getWorkId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aUser) {
                $result['User'] = $this->aUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collOrderWorkByids) {
                $result['OrderWorkByids'] = $this->collOrderWorkByids->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = HistoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setTotalPrice($value);
                break;
            case 2:
                $this->setNbWork($value);
                break;
            case 3:
                $this->setDatePayement($value);
                break;
            case 4:
                $this->setUserId($value);
                break;
            case 5:
                $this->setWorkId($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = HistoryPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTotalPrice($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNbWork($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDatePayement($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUserId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setWorkId($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(HistoryPeer::DATABASE_NAME);

        if ($this->isColumnModified(HistoryPeer::ID)) $criteria->add(HistoryPeer::ID, $this->id);
        if ($this->isColumnModified(HistoryPeer::TOTAL_PRICE)) $criteria->add(HistoryPeer::TOTAL_PRICE, $this->total_price);
        if ($this->isColumnModified(HistoryPeer::NB_WORK)) $criteria->add(HistoryPeer::NB_WORK, $this->nb_work);
        if ($this->isColumnModified(HistoryPeer::DATE_PAYEMENT)) $criteria->add(HistoryPeer::DATE_PAYEMENT, $this->date_payement);
        if ($this->isColumnModified(HistoryPeer::USER_ID)) $criteria->add(HistoryPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(HistoryPeer::WORK_ID)) $criteria->add(HistoryPeer::WORK_ID, $this->work_id);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(HistoryPeer::DATABASE_NAME);
        $criteria->add(HistoryPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of History (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTotalPrice($this->getTotalPrice());
        $copyObj->setNbWork($this->getNbWork());
        $copyObj->setDatePayement($this->getDatePayement());
        $copyObj->setUserId($this->getUserId());
        $copyObj->setWorkId($this->getWorkId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getOrderWorkByids() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOrderWorkByid($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return History Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return HistoryPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new HistoryPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a User object.
     *
     * @param                  User $v
     * @return History The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUser(User $v = null)
    {
        if ($v === null) {
            $this->setUserId(NULL);
        } else {
            $this->setUserId($v->getId());
        }

        $this->aUser = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the User object, it will not be re-added.
        if ($v !== null) {
            $v->addHistory($this);
        }


        return $this;
    }


    /**
     * Get the associated User object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return User The associated User object.
     * @throws PropelException
     */
    public function getUser(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUser === null && ($this->user_id !== null) && $doQuery) {
            $this->aUser = UserQuery::create()->findPk($this->user_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUser->addHistorys($this);
             */
        }

        return $this->aUser;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('OrderWorkByid' == $relationName) {
            $this->initOrderWorkByids();
        }
    }

    /**
     * Clears out the collOrderWorkByids collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return History The current object (for fluent API support)
     * @see        addOrderWorkByids()
     */
    public function clearOrderWorkByids()
    {
        $this->collOrderWorkByids = null; // important to set this to null since that means it is uninitialized
        $this->collOrderWorkByidsPartial = null;

        return $this;
    }

    /**
     * reset is the collOrderWorkByids collection loaded partially
     *
     * @return void
     */
    public function resetPartialOrderWorkByids($v = true)
    {
        $this->collOrderWorkByidsPartial = $v;
    }

    /**
     * Initializes the collOrderWorkByids collection.
     *
     * By default this just sets the collOrderWorkByids collection to an empty array (like clearcollOrderWorkByids());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOrderWorkByids($overrideExisting = true)
    {
        if (null !== $this->collOrderWorkByids && !$overrideExisting) {
            return;
        }
        $this->collOrderWorkByids = new PropelObjectCollection();
        $this->collOrderWorkByids->setModel('OrderWorkByid');
    }

    /**
     * Gets an array of OrderWorkByid objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this History is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|OrderWorkByid[] List of OrderWorkByid objects
     * @throws PropelException
     */
    public function getOrderWorkByids($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collOrderWorkByidsPartial && !$this->isNew();
        if (null === $this->collOrderWorkByids || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collOrderWorkByids) {
                // return empty collection
                $this->initOrderWorkByids();
            } else {
                $collOrderWorkByids = OrderWorkByidQuery::create(null, $criteria)
                    ->filterByHistory($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collOrderWorkByidsPartial && count($collOrderWorkByids)) {
                      $this->initOrderWorkByids(false);

                      foreach ($collOrderWorkByids as $obj) {
                        if (false == $this->collOrderWorkByids->contains($obj)) {
                          $this->collOrderWorkByids->append($obj);
                        }
                      }

                      $this->collOrderWorkByidsPartial = true;
                    }

                    $collOrderWorkByids->getInternalIterator()->rewind();

                    return $collOrderWorkByids;
                }

                if ($partial && $this->collOrderWorkByids) {
                    foreach ($this->collOrderWorkByids as $obj) {
                        if ($obj->isNew()) {
                            $collOrderWorkByids[] = $obj;
                        }
                    }
                }

                $this->collOrderWorkByids = $collOrderWorkByids;
                $this->collOrderWorkByidsPartial = false;
            }
        }

        return $this->collOrderWorkByids;
    }

    /**
     * Sets a collection of OrderWorkByid objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $orderWorkByids A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return History The current object (for fluent API support)
     */
    public function setOrderWorkByids(PropelCollection $orderWorkByids, PropelPDO $con = null)
    {
        $orderWorkByidsToDelete = $this->getOrderWorkByids(new Criteria(), $con)->diff($orderWorkByids);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->orderWorkByidsScheduledForDeletion = clone $orderWorkByidsToDelete;

        foreach ($orderWorkByidsToDelete as $orderWorkByidRemoved) {
            $orderWorkByidRemoved->setHistory(null);
        }

        $this->collOrderWorkByids = null;
        foreach ($orderWorkByids as $orderWorkByid) {
            $this->addOrderWorkByid($orderWorkByid);
        }

        $this->collOrderWorkByids = $orderWorkByids;
        $this->collOrderWorkByidsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related OrderWorkByid objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related OrderWorkByid objects.
     * @throws PropelException
     */
    public function countOrderWorkByids(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collOrderWorkByidsPartial && !$this->isNew();
        if (null === $this->collOrderWorkByids || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOrderWorkByids) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOrderWorkByids());
            }
            $query = OrderWorkByidQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByHistory($this)
                ->count($con);
        }

        return count($this->collOrderWorkByids);
    }

    /**
     * Method called to associate a OrderWorkByid object to this object
     * through the OrderWorkByid foreign key attribute.
     *
     * @param    OrderWorkByid $l OrderWorkByid
     * @return History The current object (for fluent API support)
     */
    public function addOrderWorkByid(OrderWorkByid $l)
    {
        if ($this->collOrderWorkByids === null) {
            $this->initOrderWorkByids();
            $this->collOrderWorkByidsPartial = true;
        }

        if (!in_array($l, $this->collOrderWorkByids->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddOrderWorkByid($l);

            if ($this->orderWorkByidsScheduledForDeletion and $this->orderWorkByidsScheduledForDeletion->contains($l)) {
                $this->orderWorkByidsScheduledForDeletion->remove($this->orderWorkByidsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	OrderWorkByid $orderWorkByid The orderWorkByid object to add.
     */
    protected function doAddOrderWorkByid($orderWorkByid)
    {
        $this->collOrderWorkByids[]= $orderWorkByid;
        $orderWorkByid->setHistory($this);
    }

    /**
     * @param	OrderWorkByid $orderWorkByid The orderWorkByid object to remove.
     * @return History The current object (for fluent API support)
     */
    public function removeOrderWorkByid($orderWorkByid)
    {
        if ($this->getOrderWorkByids()->contains($orderWorkByid)) {
            $this->collOrderWorkByids->remove($this->collOrderWorkByids->search($orderWorkByid));
            if (null === $this->orderWorkByidsScheduledForDeletion) {
                $this->orderWorkByidsScheduledForDeletion = clone $this->collOrderWorkByids;
                $this->orderWorkByidsScheduledForDeletion->clear();
            }
            $this->orderWorkByidsScheduledForDeletion[]= clone $orderWorkByid;
            $orderWorkByid->setHistory(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this History is new, it will return
     * an empty collection; or if this History has previously
     * been saved, it will retrieve related OrderWorkByids from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in History.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OrderWorkByid[] List of OrderWorkByid objects
     */
    public function getOrderWorkByidsJoinWork($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrderWorkByidQuery::create(null, $criteria);
        $query->joinWith('Work', $join_behavior);

        return $this->getOrderWorkByids($query, $con);
    }

    /**
     * Clears out the collWorks collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return History The current object (for fluent API support)
     * @see        addWorks()
     */
    public function clearWorks()
    {
        $this->collWorks = null; // important to set this to null since that means it is uninitialized
        $this->collWorksPartial = null;

        return $this;
    }

    /**
     * Initializes the collWorks collection.
     *
     * By default this just sets the collWorks collection to an empty collection (like clearWorks());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return void
     */
    public function initWorks()
    {
        $this->collWorks = new PropelObjectCollection();
        $this->collWorks->setModel('Work');
    }

    /**
     * Gets a collection of Work objects related by a many-to-many relationship
     * to the current object by way of the order_work_byid cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this History is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param PropelPDO $con Optional connection object
     *
     * @return PropelObjectCollection|Work[] List of Work objects
     */
    public function getWorks($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collWorks || null !== $criteria) {
            if ($this->isNew() && null === $this->collWorks) {
                // return empty collection
                $this->initWorks();
            } else {
                $collWorks = WorkQuery::create(null, $criteria)
                    ->filterByHistory($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collWorks;
                }
                $this->collWorks = $collWorks;
            }
        }

        return $this->collWorks;
    }

    /**
     * Sets a collection of Work objects related by a many-to-many relationship
     * to the current object by way of the order_work_byid cross-reference table.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $works A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return History The current object (for fluent API support)
     */
    public function setWorks(PropelCollection $works, PropelPDO $con = null)
    {
        $this->clearWorks();
        $currentWorks = $this->getWorks(null, $con);

        $this->worksScheduledForDeletion = $currentWorks->diff($works);

        foreach ($works as $work) {
            if (!$currentWorks->contains($work)) {
                $this->doAddWork($work);
            }
        }

        $this->collWorks = $works;

        return $this;
    }

    /**
     * Gets the number of Work objects related by a many-to-many relationship
     * to the current object by way of the order_work_byid cross-reference table.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param boolean $distinct Set to true to force count distinct
     * @param PropelPDO $con Optional connection object
     *
     * @return int the number of related Work objects
     */
    public function countWorks($criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collWorks || null !== $criteria) {
            if ($this->isNew() && null === $this->collWorks) {
                return 0;
            } else {
                $query = WorkQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByHistory($this)
                    ->count($con);
            }
        } else {
            return count($this->collWorks);
        }
    }

    /**
     * Associate a Work object to this object
     * through the order_work_byid cross reference table.
     *
     * @param  Work $work The OrderWorkByid object to relate
     * @return History The current object (for fluent API support)
     */
    public function addWork(Work $work)
    {
        if ($this->collWorks === null) {
            $this->initWorks();
        }

        if (!$this->collWorks->contains($work)) { // only add it if the **same** object is not already associated
            $this->doAddWork($work);
            $this->collWorks[] = $work;

            if ($this->worksScheduledForDeletion and $this->worksScheduledForDeletion->contains($work)) {
                $this->worksScheduledForDeletion->remove($this->worksScheduledForDeletion->search($work));
            }
        }

        return $this;
    }

    /**
     * @param	Work $work The work object to add.
     */
    protected function doAddWork(Work $work)
    {
        // set the back reference to this object directly as using provided method either results
        // in endless loop or in multiple relations
        if (!$work->getHistorys()->contains($this)) { $orderWorkByid = new OrderWorkByid();
            $orderWorkByid->setWork($work);
            $this->addOrderWorkByid($orderWorkByid);

            $foreignCollection = $work->getHistorys();
            $foreignCollection[] = $this;
        }
    }

    /**
     * Remove a Work object to this object
     * through the order_work_byid cross reference table.
     *
     * @param Work $work The OrderWorkByid object to relate
     * @return History The current object (for fluent API support)
     */
    public function removeWork(Work $work)
    {
        if ($this->getWorks()->contains($work)) {
            $this->collWorks->remove($this->collWorks->search($work));
            if (null === $this->worksScheduledForDeletion) {
                $this->worksScheduledForDeletion = clone $this->collWorks;
                $this->worksScheduledForDeletion->clear();
            }
            $this->worksScheduledForDeletion[]= $work;
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->total_price = null;
        $this->nb_work = null;
        $this->date_payement = null;
        $this->user_id = null;
        $this->work_id = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collOrderWorkByids) {
                foreach ($this->collOrderWorkByids as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collWorks) {
                foreach ($this->collWorks as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aUser instanceof Persistent) {
              $this->aUser->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collOrderWorkByids instanceof PropelCollection) {
            $this->collOrderWorkByids->clearIterator();
        }
        $this->collOrderWorkByids = null;
        if ($this->collWorks instanceof PropelCollection) {
            $this->collWorks->clearIterator();
        }
        $this->collWorks = null;
        $this->aUser = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(HistoryPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
