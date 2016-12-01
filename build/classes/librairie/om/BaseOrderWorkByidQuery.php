<?php


/**
 * Base class that represents a query for the 'order_work_byid' table.
 *
 *
 *
 * @method OrderWorkByidQuery orderByHistoryId($order = Criteria::ASC) Order by the history_id column
 * @method OrderWorkByidQuery orderByWorkId($order = Criteria::ASC) Order by the work_id column
 *
 * @method OrderWorkByidQuery groupByHistoryId() Group by the history_id column
 * @method OrderWorkByidQuery groupByWorkId() Group by the work_id column
 *
 * @method OrderWorkByidQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OrderWorkByidQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OrderWorkByidQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method OrderWorkByidQuery leftJoinHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the History relation
 * @method OrderWorkByidQuery rightJoinHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the History relation
 * @method OrderWorkByidQuery innerJoinHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the History relation
 *
 * @method OrderWorkByidQuery leftJoinWork($relationAlias = null) Adds a LEFT JOIN clause to the query using the Work relation
 * @method OrderWorkByidQuery rightJoinWork($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Work relation
 * @method OrderWorkByidQuery innerJoinWork($relationAlias = null) Adds a INNER JOIN clause to the query using the Work relation
 *
 * @method OrderWorkByid findOne(PropelPDO $con = null) Return the first OrderWorkByid matching the query
 * @method OrderWorkByid findOneOrCreate(PropelPDO $con = null) Return the first OrderWorkByid matching the query, or a new OrderWorkByid object populated from the query conditions when no match is found
 *
 * @method OrderWorkByid findOneByHistoryId(int $history_id) Return the first OrderWorkByid filtered by the history_id column
 * @method OrderWorkByid findOneByWorkId(int $work_id) Return the first OrderWorkByid filtered by the work_id column
 *
 * @method array findByHistoryId(int $history_id) Return OrderWorkByid objects filtered by the history_id column
 * @method array findByWorkId(int $work_id) Return OrderWorkByid objects filtered by the work_id column
 *
 * @package    propel.generator.librairie.om
 */
abstract class BaseOrderWorkByidQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOrderWorkByidQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'librairie';
        }
        if (null === $modelName) {
            $modelName = 'OrderWorkByid';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OrderWorkByidQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OrderWorkByidQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OrderWorkByidQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OrderWorkByidQuery) {
            return $criteria;
        }
        $query = new OrderWorkByidQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$history_id, $work_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   OrderWorkByid|OrderWorkByid[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OrderWorkByidPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OrderWorkByidPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 OrderWorkByid A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT history_id, work_id FROM order_work_byid WHERE history_id = :p0 AND work_id = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new OrderWorkByid();
            $obj->hydrate($row);
            OrderWorkByidPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return OrderWorkByid|OrderWorkByid[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|OrderWorkByid[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return OrderWorkByidQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(OrderWorkByidPeer::HISTORY_ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(OrderWorkByidPeer::WORK_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OrderWorkByidQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(OrderWorkByidPeer::HISTORY_ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(OrderWorkByidPeer::WORK_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the history_id column
     *
     * Example usage:
     * <code>
     * $query->filterByHistoryId(1234); // WHERE history_id = 1234
     * $query->filterByHistoryId(array(12, 34)); // WHERE history_id IN (12, 34)
     * $query->filterByHistoryId(array('min' => 12)); // WHERE history_id >= 12
     * $query->filterByHistoryId(array('max' => 12)); // WHERE history_id <= 12
     * </code>
     *
     * @see       filterByHistory()
     *
     * @param     mixed $historyId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrderWorkByidQuery The current query, for fluid interface
     */
    public function filterByHistoryId($historyId = null, $comparison = null)
    {
        if (is_array($historyId)) {
            $useMinMax = false;
            if (isset($historyId['min'])) {
                $this->addUsingAlias(OrderWorkByidPeer::HISTORY_ID, $historyId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($historyId['max'])) {
                $this->addUsingAlias(OrderWorkByidPeer::HISTORY_ID, $historyId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrderWorkByidPeer::HISTORY_ID, $historyId, $comparison);
    }

    /**
     * Filter the query on the work_id column
     *
     * Example usage:
     * <code>
     * $query->filterByWorkId(1234); // WHERE work_id = 1234
     * $query->filterByWorkId(array(12, 34)); // WHERE work_id IN (12, 34)
     * $query->filterByWorkId(array('min' => 12)); // WHERE work_id >= 12
     * $query->filterByWorkId(array('max' => 12)); // WHERE work_id <= 12
     * </code>
     *
     * @see       filterByWork()
     *
     * @param     mixed $workId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrderWorkByidQuery The current query, for fluid interface
     */
    public function filterByWorkId($workId = null, $comparison = null)
    {
        if (is_array($workId)) {
            $useMinMax = false;
            if (isset($workId['min'])) {
                $this->addUsingAlias(OrderWorkByidPeer::WORK_ID, $workId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($workId['max'])) {
                $this->addUsingAlias(OrderWorkByidPeer::WORK_ID, $workId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrderWorkByidPeer::WORK_ID, $workId, $comparison);
    }

    /**
     * Filter the query by a related History object
     *
     * @param   History|PropelObjectCollection $history The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrderWorkByidQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByHistory($history, $comparison = null)
    {
        if ($history instanceof History) {
            return $this
                ->addUsingAlias(OrderWorkByidPeer::HISTORY_ID, $history->getId(), $comparison);
        } elseif ($history instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrderWorkByidPeer::HISTORY_ID, $history->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByHistory() only accepts arguments of type History or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the History relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrderWorkByidQuery The current query, for fluid interface
     */
    public function joinHistory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('History');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'History');
        }

        return $this;
    }

    /**
     * Use the History relation History object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   HistoryQuery A secondary query class using the current class as primary query
     */
    public function useHistoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'History', 'HistoryQuery');
    }

    /**
     * Filter the query by a related Work object
     *
     * @param   Work|PropelObjectCollection $work The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 OrderWorkByidQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByWork($work, $comparison = null)
    {
        if ($work instanceof Work) {
            return $this
                ->addUsingAlias(OrderWorkByidPeer::WORK_ID, $work->getId(), $comparison);
        } elseif ($work instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(OrderWorkByidPeer::WORK_ID, $work->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByWork() only accepts arguments of type Work or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Work relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return OrderWorkByidQuery The current query, for fluid interface
     */
    public function joinWork($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Work');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Work');
        }

        return $this;
    }

    /**
     * Use the Work relation Work object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   WorkQuery A secondary query class using the current class as primary query
     */
    public function useWorkQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinWork($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Work', 'WorkQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   OrderWorkByid $orderWorkByid Object to remove from the list of results
     *
     * @return OrderWorkByidQuery The current query, for fluid interface
     */
    public function prune($orderWorkByid = null)
    {
        if ($orderWorkByid) {
            $this->addCond('pruneCond0', $this->getAliasedColName(OrderWorkByidPeer::HISTORY_ID), $orderWorkByid->getHistoryId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(OrderWorkByidPeer::WORK_ID), $orderWorkByid->getWorkId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
