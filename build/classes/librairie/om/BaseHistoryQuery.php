<?php


/**
 * Base class that represents a query for the 'history' table.
 *
 *
 *
 * @method HistoryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method HistoryQuery orderByTotalPrice($order = Criteria::ASC) Order by the total_price column
 * @method HistoryQuery orderByNbWork($order = Criteria::ASC) Order by the Nb_Work column
 * @method HistoryQuery orderByDatePayement($order = Criteria::ASC) Order by the date_Payement column
 * @method HistoryQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method HistoryQuery orderByWorkId($order = Criteria::ASC) Order by the work_id column
 *
 * @method HistoryQuery groupById() Group by the id column
 * @method HistoryQuery groupByTotalPrice() Group by the total_price column
 * @method HistoryQuery groupByNbWork() Group by the Nb_Work column
 * @method HistoryQuery groupByDatePayement() Group by the date_Payement column
 * @method HistoryQuery groupByUserId() Group by the user_id column
 * @method HistoryQuery groupByWorkId() Group by the work_id column
 *
 * @method HistoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method HistoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method HistoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method HistoryQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method HistoryQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method HistoryQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method HistoryQuery leftJoinOrderWorkByid($relationAlias = null) Adds a LEFT JOIN clause to the query using the OrderWorkByid relation
 * @method HistoryQuery rightJoinOrderWorkByid($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OrderWorkByid relation
 * @method HistoryQuery innerJoinOrderWorkByid($relationAlias = null) Adds a INNER JOIN clause to the query using the OrderWorkByid relation
 *
 * @method History findOne(PropelPDO $con = null) Return the first History matching the query
 * @method History findOneOrCreate(PropelPDO $con = null) Return the first History matching the query, or a new History object populated from the query conditions when no match is found
 *
 * @method History findOneByTotalPrice(double $total_price) Return the first History filtered by the total_price column
 * @method History findOneByNbWork(int $Nb_Work) Return the first History filtered by the Nb_Work column
 * @method History findOneByDatePayement(string $date_Payement) Return the first History filtered by the date_Payement column
 * @method History findOneByUserId(int $user_id) Return the first History filtered by the user_id column
 * @method History findOneByWorkId(int $work_id) Return the first History filtered by the work_id column
 *
 * @method array findById(int $id) Return History objects filtered by the id column
 * @method array findByTotalPrice(double $total_price) Return History objects filtered by the total_price column
 * @method array findByNbWork(int $Nb_Work) Return History objects filtered by the Nb_Work column
 * @method array findByDatePayement(string $date_Payement) Return History objects filtered by the date_Payement column
 * @method array findByUserId(int $user_id) Return History objects filtered by the user_id column
 * @method array findByWorkId(int $work_id) Return History objects filtered by the work_id column
 *
 * @package    propel.generator.librairie.om
 */
abstract class BaseHistoryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseHistoryQuery object.
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
            $modelName = 'History';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new HistoryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   HistoryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return HistoryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof HistoryQuery) {
            return $criteria;
        }
        $query = new HistoryQuery(null, null, $modelAlias);

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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   History|History[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = HistoryPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(HistoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 History A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 History A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, total_price, Nb_Work, date_Payement, user_id, work_id FROM history WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new History();
            $obj->hydrate($row);
            HistoryPeer::addInstanceToPool($obj, (string) $key);
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
     * @return History|History[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|History[]|mixed the list of results, formatted by the current formatter
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
     * @return HistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(HistoryPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return HistoryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(HistoryPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoryQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(HistoryPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(HistoryPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoryPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the total_price column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalPrice(1234); // WHERE total_price = 1234
     * $query->filterByTotalPrice(array(12, 34)); // WHERE total_price IN (12, 34)
     * $query->filterByTotalPrice(array('min' => 12)); // WHERE total_price >= 12
     * $query->filterByTotalPrice(array('max' => 12)); // WHERE total_price <= 12
     * </code>
     *
     * @param     mixed $totalPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoryQuery The current query, for fluid interface
     */
    public function filterByTotalPrice($totalPrice = null, $comparison = null)
    {
        if (is_array($totalPrice)) {
            $useMinMax = false;
            if (isset($totalPrice['min'])) {
                $this->addUsingAlias(HistoryPeer::TOTAL_PRICE, $totalPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalPrice['max'])) {
                $this->addUsingAlias(HistoryPeer::TOTAL_PRICE, $totalPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoryPeer::TOTAL_PRICE, $totalPrice, $comparison);
    }

    /**
     * Filter the query on the Nb_Work column
     *
     * Example usage:
     * <code>
     * $query->filterByNbWork(1234); // WHERE Nb_Work = 1234
     * $query->filterByNbWork(array(12, 34)); // WHERE Nb_Work IN (12, 34)
     * $query->filterByNbWork(array('min' => 12)); // WHERE Nb_Work >= 12
     * $query->filterByNbWork(array('max' => 12)); // WHERE Nb_Work <= 12
     * </code>
     *
     * @param     mixed $nbWork The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoryQuery The current query, for fluid interface
     */
    public function filterByNbWork($nbWork = null, $comparison = null)
    {
        if (is_array($nbWork)) {
            $useMinMax = false;
            if (isset($nbWork['min'])) {
                $this->addUsingAlias(HistoryPeer::NB_WORK, $nbWork['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nbWork['max'])) {
                $this->addUsingAlias(HistoryPeer::NB_WORK, $nbWork['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoryPeer::NB_WORK, $nbWork, $comparison);
    }

    /**
     * Filter the query on the date_Payement column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePayement('2011-03-14'); // WHERE date_Payement = '2011-03-14'
     * $query->filterByDatePayement('now'); // WHERE date_Payement = '2011-03-14'
     * $query->filterByDatePayement(array('max' => 'yesterday')); // WHERE date_Payement < '2011-03-13'
     * </code>
     *
     * @param     mixed $datePayement The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoryQuery The current query, for fluid interface
     */
    public function filterByDatePayement($datePayement = null, $comparison = null)
    {
        if (is_array($datePayement)) {
            $useMinMax = false;
            if (isset($datePayement['min'])) {
                $this->addUsingAlias(HistoryPeer::DATE_PAYEMENT, $datePayement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datePayement['max'])) {
                $this->addUsingAlias(HistoryPeer::DATE_PAYEMENT, $datePayement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoryPeer::DATE_PAYEMENT, $datePayement, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @see       filterByUser()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoryQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(HistoryPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(HistoryPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoryPeer::USER_ID, $userId, $comparison);
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
     * @param     mixed $workId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoryQuery The current query, for fluid interface
     */
    public function filterByWorkId($workId = null, $comparison = null)
    {
        if (is_array($workId)) {
            $useMinMax = false;
            if (isset($workId['min'])) {
                $this->addUsingAlias(HistoryPeer::WORK_ID, $workId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($workId['max'])) {
                $this->addUsingAlias(HistoryPeer::WORK_ID, $workId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoryPeer::WORK_ID, $workId, $comparison);
    }

    /**
     * Filter the query by a related User object
     *
     * @param   User|PropelObjectCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 HistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(HistoryPeer::USER_ID, $user->getId(), $comparison);
        } elseif ($user instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(HistoryPeer::USER_ID, $user->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUser() only accepts arguments of type User or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the User relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return HistoryQuery The current query, for fluid interface
     */
    public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('User');

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
            $this->addJoinObject($join, 'User');
        }

        return $this;
    }

    /**
     * Use the User relation User object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UserQuery A secondary query class using the current class as primary query
     */
    public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
    }

    /**
     * Filter the query by a related OrderWorkByid object
     *
     * @param   OrderWorkByid|PropelObjectCollection $orderWorkByid  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 HistoryQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrderWorkByid($orderWorkByid, $comparison = null)
    {
        if ($orderWorkByid instanceof OrderWorkByid) {
            return $this
                ->addUsingAlias(HistoryPeer::ID, $orderWorkByid->getHistoryId(), $comparison);
        } elseif ($orderWorkByid instanceof PropelObjectCollection) {
            return $this
                ->useOrderWorkByidQuery()
                ->filterByPrimaryKeys($orderWorkByid->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByOrderWorkByid() only accepts arguments of type OrderWorkByid or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the OrderWorkByid relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return HistoryQuery The current query, for fluid interface
     */
    public function joinOrderWorkByid($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('OrderWorkByid');

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
            $this->addJoinObject($join, 'OrderWorkByid');
        }

        return $this;
    }

    /**
     * Use the OrderWorkByid relation OrderWorkByid object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   OrderWorkByidQuery A secondary query class using the current class as primary query
     */
    public function useOrderWorkByidQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrderWorkByid($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'OrderWorkByid', 'OrderWorkByidQuery');
    }

    /**
     * Filter the query by a related Work object
     * using the order_work_byid table as cross reference
     *
     * @param   Work $work the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   HistoryQuery The current query, for fluid interface
     */
    public function filterByWork($work, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useOrderWorkByidQuery()
            ->filterByWork($work, $comparison)
            ->endUse();
    }

    /**
     * Exclude object from result
     *
     * @param   History $history Object to remove from the list of results
     *
     * @return HistoryQuery The current query, for fluid interface
     */
    public function prune($history = null)
    {
        if ($history) {
            $this->addUsingAlias(HistoryPeer::ID, $history->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
