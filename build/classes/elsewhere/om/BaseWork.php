<?php


/**
 * Base class that represents a row from the 'work' table.
 *
 *
 *
 * @package    propel.generator.elsewhere.om
 */
abstract class BaseWork extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'WorkPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        WorkPeer
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
     * The value for the title field.
     * @var        string
     */
    protected $title;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the height field.
     * @var        int
     */
    protected $height;

    /**
     * The value for the width field.
     * @var        int
     */
    protected $width;

    /**
     * The value for the price field.
     * @var        double
     */
    protected $price;

    /**
     * The value for the filename field.
     * @var        string
     */
    protected $filename;

    /**
     * The value for the filesize field.
     * @var        double
     */
    protected $filesize;

    /**
     * The value for the stock field.
     * @var        int
     */
    protected $stock;

    /**
     * The value for the rate field.
     * @var        double
     */
    protected $rate;

    /**
     * The value for the date_post field.
     * @var        string
     */
    protected $date_post;

    /**
     * The value for the artist_id field.
     * @var        int
     */
    protected $artist_id;

    /**
     * The value for the category_id field.
     * @var        int
     */
    protected $category_id;

    /**
     * @var        Artist
     */
    protected $aArtist;

    /**
     * @var        Category
     */
    protected $aCategory;

    /**
     * @var        PropelObjectCollection|OrderWorkByid[] Collection to store aggregation of OrderWorkByid objects.
     */
    protected $collOrderWorkByids;
    protected $collOrderWorkByidsPartial;

    /**
     * @var        PropelObjectCollection|History[] Collection to store aggregation of History objects.
     */
    protected $collHistorys;

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
    protected $historysScheduledForDeletion = null;

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
     * Get the [title] column value.
     * Titre du livre
     * @return string
     */
    public function getTitle()
    {

        return $this->title;
    }

    /**
     * Get the [description] column value.
     * description
     * @return string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Get the [height] column value.
     * height
     * @return int
     */
    public function getHeight()
    {

        return $this->height;
    }

    /**
     * Get the [width] column value.
     * width
     * @return int
     */
    public function getWidth()
    {

        return $this->width;
    }

    /**
     * Get the [price] column value.
     * Work price
     * @return double
     */
    public function getPrice()
    {

        return $this->price;
    }

    /**
     * Get the [filename] column value.
     * filename
     * @return string
     */
    public function getFilename()
    {

        return $this->filename;
    }

    /**
     * Get the [filesize] column value.
     * filesize
     * @return double
     */
    public function getFilesize()
    {

        return $this->filesize;
    }

    /**
     * Get the [stock] column value.
     * stock
     * @return int
     */
    public function getStock()
    {

        return $this->stock;
    }

    /**
     * Get the [rate] column value.
     * rate
     * @return double
     */
    public function getRate()
    {

        return $this->rate;
    }

    /**
     * Get the [optionally formatted] temporal [date_post] column value.
     * datepost
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatePost($format = '%x')
    {
        if ($this->date_post === null) {
            return null;
        }

        if ($this->date_post === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_post);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_post, true), $x);
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
     * Get the [artist_id] column value.
     * artist_id
     * @return int
     */
    public function getArtistId()
    {

        return $this->artist_id;
    }

    /**
     * Get the [category_id] column value.
     * category_id
     * @return int
     */
    public function getCategoryId()
    {

        return $this->category_id;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return Work The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = WorkPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [title] column.
     * Titre du livre
     * @param  string $v new value
     * @return Work The current object (for fluent API support)
     */
    public function setTitle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->title !== $v) {
            $this->title = $v;
            $this->modifiedColumns[] = WorkPeer::TITLE;
        }


        return $this;
    } // setTitle()

    /**
     * Set the value of [description] column.
     * description
     * @param  string $v new value
     * @return Work The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = WorkPeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [height] column.
     * height
     * @param  int $v new value
     * @return Work The current object (for fluent API support)
     */
    public function setHeight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->height !== $v) {
            $this->height = $v;
            $this->modifiedColumns[] = WorkPeer::HEIGHT;
        }


        return $this;
    } // setHeight()

    /**
     * Set the value of [width] column.
     * width
     * @param  int $v new value
     * @return Work The current object (for fluent API support)
     */
    public function setWidth($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->width !== $v) {
            $this->width = $v;
            $this->modifiedColumns[] = WorkPeer::WIDTH;
        }


        return $this;
    } // setWidth()

    /**
     * Set the value of [price] column.
     * Work price
     * @param  double $v new value
     * @return Work The current object (for fluent API support)
     */
    public function setPrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->price !== $v) {
            $this->price = $v;
            $this->modifiedColumns[] = WorkPeer::PRICE;
        }


        return $this;
    } // setPrice()

    /**
     * Set the value of [filename] column.
     * filename
     * @param  string $v new value
     * @return Work The current object (for fluent API support)
     */
    public function setFilename($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->filename !== $v) {
            $this->filename = $v;
            $this->modifiedColumns[] = WorkPeer::FILENAME;
        }


        return $this;
    } // setFilename()

    /**
     * Set the value of [filesize] column.
     * filesize
     * @param  double $v new value
     * @return Work The current object (for fluent API support)
     */
    public function setFilesize($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->filesize !== $v) {
            $this->filesize = $v;
            $this->modifiedColumns[] = WorkPeer::FILESIZE;
        }


        return $this;
    } // setFilesize()

    /**
     * Set the value of [stock] column.
     * stock
     * @param  int $v new value
     * @return Work The current object (for fluent API support)
     */
    public function setStock($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stock !== $v) {
            $this->stock = $v;
            $this->modifiedColumns[] = WorkPeer::STOCK;
        }


        return $this;
    } // setStock()

    /**
     * Set the value of [rate] column.
     * rate
     * @param  double $v new value
     * @return Work The current object (for fluent API support)
     */
    public function setRate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->rate !== $v) {
            $this->rate = $v;
            $this->modifiedColumns[] = WorkPeer::RATE;
        }


        return $this;
    } // setRate()

    /**
     * Sets the value of [date_post] column to a normalized version of the date/time value specified.
     * datepost
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Work The current object (for fluent API support)
     */
    public function setDatePost($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_post !== null || $dt !== null) {
            $currentDateAsString = ($this->date_post !== null && $tmpDt = new DateTime($this->date_post)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_post = $newDateAsString;
                $this->modifiedColumns[] = WorkPeer::DATE_POST;
            }
        } // if either are not null


        return $this;
    } // setDatePost()

    /**
     * Set the value of [artist_id] column.
     * artist_id
     * @param  int $v new value
     * @return Work The current object (for fluent API support)
     */
    public function setArtistId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->artist_id !== $v) {
            $this->artist_id = $v;
            $this->modifiedColumns[] = WorkPeer::ARTIST_ID;
        }

        if ($this->aArtist !== null && $this->aArtist->getId() !== $v) {
            $this->aArtist = null;
        }


        return $this;
    } // setArtistId()

    /**
     * Set the value of [category_id] column.
     * category_id
     * @param  int $v new value
     * @return Work The current object (for fluent API support)
     */
    public function setCategoryId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->category_id !== $v) {
            $this->category_id = $v;
            $this->modifiedColumns[] = WorkPeer::CATEGORY_ID;
        }

        if ($this->aCategory !== null && $this->aCategory->getId() !== $v) {
            $this->aCategory = null;
        }


        return $this;
    } // setCategoryId()

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
            $this->title = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->description = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->height = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->width = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->price = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
            $this->filename = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->filesize = ($row[$startcol + 7] !== null) ? (double) $row[$startcol + 7] : null;
            $this->stock = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->rate = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
            $this->date_post = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->artist_id = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->category_id = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = WorkPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Work object", $e);
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

        if ($this->aArtist !== null && $this->artist_id !== $this->aArtist->getId()) {
            $this->aArtist = null;
        }
        if ($this->aCategory !== null && $this->category_id !== $this->aCategory->getId()) {
            $this->aCategory = null;
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
            $con = Propel::getConnection(WorkPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = WorkPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aArtist = null;
            $this->aCategory = null;
            $this->collOrderWorkByids = null;

            $this->collHistorys = null;
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
            $con = Propel::getConnection(WorkPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = WorkQuery::create()
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
            $con = Propel::getConnection(WorkPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                WorkPeer::addInstanceToPool($this);
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

            if ($this->aArtist !== null) {
                if ($this->aArtist->isModified() || $this->aArtist->isNew()) {
                    $affectedRows += $this->aArtist->save($con);
                }
                $this->setArtist($this->aArtist);
            }

            if ($this->aCategory !== null) {
                if ($this->aCategory->isModified() || $this->aCategory->isNew()) {
                    $affectedRows += $this->aCategory->save($con);
                }
                $this->setCategory($this->aCategory);
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

            if ($this->historysScheduledForDeletion !== null) {
                if (!$this->historysScheduledForDeletion->isEmpty()) {
                    $pks = array();
                    $pk = $this->getPrimaryKey();
                    foreach ($this->historysScheduledForDeletion->getPrimaryKeys(false) as $remotePk) {
                        $pks[] = array($remotePk, $pk);
                    }
                    OrderWorkByidQuery::create()
                        ->filterByPrimaryKeys($pks)
                        ->delete($con);
                    $this->historysScheduledForDeletion = null;
                }

                foreach ($this->getHistorys() as $history) {
                    if ($history->isModified()) {
                        $history->save($con);
                    }
                }
            } elseif ($this->collHistorys) {
                foreach ($this->collHistorys as $history) {
                    if ($history->isModified()) {
                        $history->save($con);
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

        $this->modifiedColumns[] = WorkPeer::ID;

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(WorkPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(WorkPeer::TITLE)) {
            $modifiedColumns[':p' . $index++]  = 'title';
        }
        if ($this->isColumnModified(WorkPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'description';
        }
        if ($this->isColumnModified(WorkPeer::HEIGHT)) {
            $modifiedColumns[':p' . $index++]  = 'height';
        }
        if ($this->isColumnModified(WorkPeer::WIDTH)) {
            $modifiedColumns[':p' . $index++]  = 'width';
        }
        if ($this->isColumnModified(WorkPeer::PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'price';
        }
        if ($this->isColumnModified(WorkPeer::FILENAME)) {
            $modifiedColumns[':p' . $index++]  = 'filename';
        }
        if ($this->isColumnModified(WorkPeer::FILESIZE)) {
            $modifiedColumns[':p' . $index++]  = 'filesize';
        }
        if ($this->isColumnModified(WorkPeer::STOCK)) {
            $modifiedColumns[':p' . $index++]  = 'stock';
        }
        if ($this->isColumnModified(WorkPeer::RATE)) {
            $modifiedColumns[':p' . $index++]  = 'rate';
        }
        if ($this->isColumnModified(WorkPeer::DATE_POST)) {
            $modifiedColumns[':p' . $index++]  = 'date_post';
        }
        if ($this->isColumnModified(WorkPeer::ARTIST_ID)) {
            $modifiedColumns[':p' . $index++]  = 'artist_id';
        }
        if ($this->isColumnModified(WorkPeer::CATEGORY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'category_id';
        }

        $sql = sprintf(
            'INSERT INTO work (%s) VALUES (%s)',
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
                    case 'title':
                        $stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
                        break;
                    case 'description':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case 'height':
                        $stmt->bindValue($identifier, $this->height, PDO::PARAM_INT);
                        break;
                    case 'width':
                        $stmt->bindValue($identifier, $this->width, PDO::PARAM_INT);
                        break;
                    case 'price':
                        $stmt->bindValue($identifier, $this->price, PDO::PARAM_STR);
                        break;
                    case 'filename':
                        $stmt->bindValue($identifier, $this->filename, PDO::PARAM_STR);
                        break;
                    case 'filesize':
                        $stmt->bindValue($identifier, $this->filesize, PDO::PARAM_STR);
                        break;
                    case 'stock':
                        $stmt->bindValue($identifier, $this->stock, PDO::PARAM_INT);
                        break;
                    case 'rate':
                        $stmt->bindValue($identifier, $this->rate, PDO::PARAM_STR);
                        break;
                    case 'date_post':
                        $stmt->bindValue($identifier, $this->date_post, PDO::PARAM_STR);
                        break;
                    case 'artist_id':
                        $stmt->bindValue($identifier, $this->artist_id, PDO::PARAM_INT);
                        break;
                    case 'category_id':
                        $stmt->bindValue($identifier, $this->category_id, PDO::PARAM_INT);
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

            if ($this->aArtist !== null) {
                if (!$this->aArtist->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aArtist->getValidationFailures());
                }
            }

            if ($this->aCategory !== null) {
                if (!$this->aCategory->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCategory->getValidationFailures());
                }
            }


            if (($retval = WorkPeer::doValidate($this, $columns)) !== true) {
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
        $pos = WorkPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getTitle();
                break;
            case 2:
                return $this->getDescription();
                break;
            case 3:
                return $this->getHeight();
                break;
            case 4:
                return $this->getWidth();
                break;
            case 5:
                return $this->getPrice();
                break;
            case 6:
                return $this->getFilename();
                break;
            case 7:
                return $this->getFilesize();
                break;
            case 8:
                return $this->getStock();
                break;
            case 9:
                return $this->getRate();
                break;
            case 10:
                return $this->getDatePost();
                break;
            case 11:
                return $this->getArtistId();
                break;
            case 12:
                return $this->getCategoryId();
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
        if (isset($alreadyDumpedObjects['Work'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Work'][$this->getPrimaryKey()] = true;
        $keys = WorkPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getTitle(),
            $keys[2] => $this->getDescription(),
            $keys[3] => $this->getHeight(),
            $keys[4] => $this->getWidth(),
            $keys[5] => $this->getPrice(),
            $keys[6] => $this->getFilename(),
            $keys[7] => $this->getFilesize(),
            $keys[8] => $this->getStock(),
            $keys[9] => $this->getRate(),
            $keys[10] => $this->getDatePost(),
            $keys[11] => $this->getArtistId(),
            $keys[12] => $this->getCategoryId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aArtist) {
                $result['Artist'] = $this->aArtist->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCategory) {
                $result['Category'] = $this->aCategory->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = WorkPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setTitle($value);
                break;
            case 2:
                $this->setDescription($value);
                break;
            case 3:
                $this->setHeight($value);
                break;
            case 4:
                $this->setWidth($value);
                break;
            case 5:
                $this->setPrice($value);
                break;
            case 6:
                $this->setFilename($value);
                break;
            case 7:
                $this->setFilesize($value);
                break;
            case 8:
                $this->setStock($value);
                break;
            case 9:
                $this->setRate($value);
                break;
            case 10:
                $this->setDatePost($value);
                break;
            case 11:
                $this->setArtistId($value);
                break;
            case 12:
                $this->setCategoryId($value);
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
        $keys = WorkPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTitle($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setHeight($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setWidth($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPrice($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setFilename($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setFilesize($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setStock($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setRate($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDatePost($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setArtistId($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCategoryId($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(WorkPeer::DATABASE_NAME);

        if ($this->isColumnModified(WorkPeer::ID)) $criteria->add(WorkPeer::ID, $this->id);
        if ($this->isColumnModified(WorkPeer::TITLE)) $criteria->add(WorkPeer::TITLE, $this->title);
        if ($this->isColumnModified(WorkPeer::DESCRIPTION)) $criteria->add(WorkPeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(WorkPeer::HEIGHT)) $criteria->add(WorkPeer::HEIGHT, $this->height);
        if ($this->isColumnModified(WorkPeer::WIDTH)) $criteria->add(WorkPeer::WIDTH, $this->width);
        if ($this->isColumnModified(WorkPeer::PRICE)) $criteria->add(WorkPeer::PRICE, $this->price);
        if ($this->isColumnModified(WorkPeer::FILENAME)) $criteria->add(WorkPeer::FILENAME, $this->filename);
        if ($this->isColumnModified(WorkPeer::FILESIZE)) $criteria->add(WorkPeer::FILESIZE, $this->filesize);
        if ($this->isColumnModified(WorkPeer::STOCK)) $criteria->add(WorkPeer::STOCK, $this->stock);
        if ($this->isColumnModified(WorkPeer::RATE)) $criteria->add(WorkPeer::RATE, $this->rate);
        if ($this->isColumnModified(WorkPeer::DATE_POST)) $criteria->add(WorkPeer::DATE_POST, $this->date_post);
        if ($this->isColumnModified(WorkPeer::ARTIST_ID)) $criteria->add(WorkPeer::ARTIST_ID, $this->artist_id);
        if ($this->isColumnModified(WorkPeer::CATEGORY_ID)) $criteria->add(WorkPeer::CATEGORY_ID, $this->category_id);

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
        $criteria = new Criteria(WorkPeer::DATABASE_NAME);
        $criteria->add(WorkPeer::ID, $this->id);

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
     * @param object $copyObj An object of Work (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTitle($this->getTitle());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setHeight($this->getHeight());
        $copyObj->setWidth($this->getWidth());
        $copyObj->setPrice($this->getPrice());
        $copyObj->setFilename($this->getFilename());
        $copyObj->setFilesize($this->getFilesize());
        $copyObj->setStock($this->getStock());
        $copyObj->setRate($this->getRate());
        $copyObj->setDatePost($this->getDatePost());
        $copyObj->setArtistId($this->getArtistId());
        $copyObj->setCategoryId($this->getCategoryId());

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
     * @return Work Clone of current object.
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
     * @return WorkPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new WorkPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Artist object.
     *
     * @param                  Artist $v
     * @return Work The current object (for fluent API support)
     * @throws PropelException
     */
    public function setArtist(Artist $v = null)
    {
        if ($v === null) {
            $this->setArtistId(NULL);
        } else {
            $this->setArtistId($v->getId());
        }

        $this->aArtist = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Artist object, it will not be re-added.
        if ($v !== null) {
            $v->addWork($this);
        }


        return $this;
    }


    /**
     * Get the associated Artist object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Artist The associated Artist object.
     * @throws PropelException
     */
    public function getArtist(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aArtist === null && ($this->artist_id !== null) && $doQuery) {
            $this->aArtist = ArtistQuery::create()->findPk($this->artist_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aArtist->addWorks($this);
             */
        }

        return $this->aArtist;
    }

    /**
     * Declares an association between this object and a Category object.
     *
     * @param                  Category $v
     * @return Work The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCategory(Category $v = null)
    {
        if ($v === null) {
            $this->setCategoryId(NULL);
        } else {
            $this->setCategoryId($v->getId());
        }

        $this->aCategory = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Category object, it will not be re-added.
        if ($v !== null) {
            $v->addWork($this);
        }


        return $this;
    }


    /**
     * Get the associated Category object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Category The associated Category object.
     * @throws PropelException
     */
    public function getCategory(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCategory === null && ($this->category_id !== null) && $doQuery) {
            $this->aCategory = CategoryQuery::create()->findPk($this->category_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCategory->addWorks($this);
             */
        }

        return $this->aCategory;
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
     * @return Work The current object (for fluent API support)
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
     * If this Work is new, it will return
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
                    ->filterByWork($this)
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
     * @return Work The current object (for fluent API support)
     */
    public function setOrderWorkByids(PropelCollection $orderWorkByids, PropelPDO $con = null)
    {
        $orderWorkByidsToDelete = $this->getOrderWorkByids(new Criteria(), $con)->diff($orderWorkByids);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->orderWorkByidsScheduledForDeletion = clone $orderWorkByidsToDelete;

        foreach ($orderWorkByidsToDelete as $orderWorkByidRemoved) {
            $orderWorkByidRemoved->setWork(null);
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
                ->filterByWork($this)
                ->count($con);
        }

        return count($this->collOrderWorkByids);
    }

    /**
     * Method called to associate a OrderWorkByid object to this object
     * through the OrderWorkByid foreign key attribute.
     *
     * @param    OrderWorkByid $l OrderWorkByid
     * @return Work The current object (for fluent API support)
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
        $orderWorkByid->setWork($this);
    }

    /**
     * @param	OrderWorkByid $orderWorkByid The orderWorkByid object to remove.
     * @return Work The current object (for fluent API support)
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
            $orderWorkByid->setWork(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Work is new, it will return
     * an empty collection; or if this Work has previously
     * been saved, it will retrieve related OrderWorkByids from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Work.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|OrderWorkByid[] List of OrderWorkByid objects
     */
    public function getOrderWorkByidsJoinHistory($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = OrderWorkByidQuery::create(null, $criteria);
        $query->joinWith('History', $join_behavior);

        return $this->getOrderWorkByids($query, $con);
    }

    /**
     * Clears out the collHistorys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Work The current object (for fluent API support)
     * @see        addHistorys()
     */
    public function clearHistorys()
    {
        $this->collHistorys = null; // important to set this to null since that means it is uninitialized
        $this->collHistorysPartial = null;

        return $this;
    }

    /**
     * Initializes the collHistorys collection.
     *
     * By default this just sets the collHistorys collection to an empty collection (like clearHistorys());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @return void
     */
    public function initHistorys()
    {
        $this->collHistorys = new PropelObjectCollection();
        $this->collHistorys->setModel('History');
    }

    /**
     * Gets a collection of History objects related by a many-to-many relationship
     * to the current object by way of the order_work_byid cross-reference table.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Work is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param PropelPDO $con Optional connection object
     *
     * @return PropelObjectCollection|History[] List of History objects
     */
    public function getHistorys($criteria = null, PropelPDO $con = null)
    {
        if (null === $this->collHistorys || null !== $criteria) {
            if ($this->isNew() && null === $this->collHistorys) {
                // return empty collection
                $this->initHistorys();
            } else {
                $collHistorys = HistoryQuery::create(null, $criteria)
                    ->filterByWork($this)
                    ->find($con);
                if (null !== $criteria) {
                    return $collHistorys;
                }
                $this->collHistorys = $collHistorys;
            }
        }

        return $this->collHistorys;
    }

    /**
     * Sets a collection of History objects related by a many-to-many relationship
     * to the current object by way of the order_work_byid cross-reference table.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $historys A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Work The current object (for fluent API support)
     */
    public function setHistorys(PropelCollection $historys, PropelPDO $con = null)
    {
        $this->clearHistorys();
        $currentHistorys = $this->getHistorys(null, $con);

        $this->historysScheduledForDeletion = $currentHistorys->diff($historys);

        foreach ($historys as $history) {
            if (!$currentHistorys->contains($history)) {
                $this->doAddHistory($history);
            }
        }

        $this->collHistorys = $historys;

        return $this;
    }

    /**
     * Gets the number of History objects related by a many-to-many relationship
     * to the current object by way of the order_work_byid cross-reference table.
     *
     * @param Criteria $criteria Optional query object to filter the query
     * @param boolean $distinct Set to true to force count distinct
     * @param PropelPDO $con Optional connection object
     *
     * @return int the number of related History objects
     */
    public function countHistorys($criteria = null, $distinct = false, PropelPDO $con = null)
    {
        if (null === $this->collHistorys || null !== $criteria) {
            if ($this->isNew() && null === $this->collHistorys) {
                return 0;
            } else {
                $query = HistoryQuery::create(null, $criteria);
                if ($distinct) {
                    $query->distinct();
                }

                return $query
                    ->filterByWork($this)
                    ->count($con);
            }
        } else {
            return count($this->collHistorys);
        }
    }

    /**
     * Associate a History object to this object
     * through the order_work_byid cross reference table.
     *
     * @param  History $history The OrderWorkByid object to relate
     * @return Work The current object (for fluent API support)
     */
    public function addHistory(History $history)
    {
        if ($this->collHistorys === null) {
            $this->initHistorys();
        }

        if (!$this->collHistorys->contains($history)) { // only add it if the **same** object is not already associated
            $this->doAddHistory($history);
            $this->collHistorys[] = $history;

            if ($this->historysScheduledForDeletion and $this->historysScheduledForDeletion->contains($history)) {
                $this->historysScheduledForDeletion->remove($this->historysScheduledForDeletion->search($history));
            }
        }

        return $this;
    }

    /**
     * @param	History $history The history object to add.
     */
    protected function doAddHistory(History $history)
    {
        // set the back reference to this object directly as using provided method either results
        // in endless loop or in multiple relations
        if (!$history->getWorks()->contains($this)) { $orderWorkByid = new OrderWorkByid();
            $orderWorkByid->setHistory($history);
            $this->addOrderWorkByid($orderWorkByid);

            $foreignCollection = $history->getWorks();
            $foreignCollection[] = $this;
        }
    }

    /**
     * Remove a History object to this object
     * through the order_work_byid cross reference table.
     *
     * @param History $history The OrderWorkByid object to relate
     * @return Work The current object (for fluent API support)
     */
    public function removeHistory(History $history)
    {
        if ($this->getHistorys()->contains($history)) {
            $this->collHistorys->remove($this->collHistorys->search($history));
            if (null === $this->historysScheduledForDeletion) {
                $this->historysScheduledForDeletion = clone $this->collHistorys;
                $this->historysScheduledForDeletion->clear();
            }
            $this->historysScheduledForDeletion[]= $history;
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->title = null;
        $this->description = null;
        $this->height = null;
        $this->width = null;
        $this->price = null;
        $this->filename = null;
        $this->filesize = null;
        $this->stock = null;
        $this->rate = null;
        $this->date_post = null;
        $this->artist_id = null;
        $this->category_id = null;
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
            if ($this->collHistorys) {
                foreach ($this->collHistorys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aArtist instanceof Persistent) {
              $this->aArtist->clearAllReferences($deep);
            }
            if ($this->aCategory instanceof Persistent) {
              $this->aCategory->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collOrderWorkByids instanceof PropelCollection) {
            $this->collOrderWorkByids->clearIterator();
        }
        $this->collOrderWorkByids = null;
        if ($this->collHistorys instanceof PropelCollection) {
            $this->collHistorys->clearIterator();
        }
        $this->collHistorys = null;
        $this->aArtist = null;
        $this->aCategory = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string The value of the 'title' column
     */
    public function __toString()
    {
        return (string) $this->getTitle();
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
