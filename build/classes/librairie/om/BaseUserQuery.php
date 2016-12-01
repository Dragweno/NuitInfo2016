<?php


/**
 * Base class that represents a query for the 'user' table.
 *
 *
 *
 * @method UserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method UserQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method UserQuery orderByFirstname($order = Criteria::ASC) Order by the firstname column
 * @method UserQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method UserQuery orderByPostalCode($order = Criteria::ASC) Order by the postal_code column
 * @method UserQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method UserQuery orderByCivility($order = Criteria::ASC) Order by the civility column
 * @method UserQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method UserQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method UserQuery orderByDateJoined($order = Criteria::ASC) Order by the date_joined column
 * @method UserQuery orderByDateUpdate($order = Criteria::ASC) Order by the date_update column
 * @method UserQuery orderByDateLastlog($order = Criteria::ASC) Order by the date_lastlog column
 *
 * @method UserQuery groupById() Group by the id column
 * @method UserQuery groupByName() Group by the name column
 * @method UserQuery groupByFirstname() Group by the firstname column
 * @method UserQuery groupByAddress() Group by the address column
 * @method UserQuery groupByPostalCode() Group by the postal_code column
 * @method UserQuery groupByCity() Group by the city column
 * @method UserQuery groupByCivility() Group by the civility column
 * @method UserQuery groupByEmail() Group by the email column
 * @method UserQuery groupByPassword() Group by the password column
 * @method UserQuery groupByDateJoined() Group by the date_joined column
 * @method UserQuery groupByDateUpdate() Group by the date_update column
 * @method UserQuery groupByDateLastlog() Group by the date_lastlog column
 *
 * @method UserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UserQuery leftJoinHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the History relation
 * @method UserQuery rightJoinHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the History relation
 * @method UserQuery innerJoinHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the History relation
 *
 * @method User findOne(PropelPDO $con = null) Return the first User matching the query
 * @method User findOneOrCreate(PropelPDO $con = null) Return the first User matching the query, or a new User object populated from the query conditions when no match is found
 *
 * @method User findOneByName(string $name) Return the first User filtered by the name column
 * @method User findOneByFirstname(string $firstname) Return the first User filtered by the firstname column
 * @method User findOneByAddress(string $address) Return the first User filtered by the address column
 * @method User findOneByPostalCode(string $postal_code) Return the first User filtered by the postal_code column
 * @method User findOneByCity(string $city) Return the first User filtered by the city column
 * @method User findOneByCivility(string $civility) Return the first User filtered by the civility column
 * @method User findOneByEmail(string $email) Return the first User filtered by the email column
 * @method User findOneByPassword(string $password) Return the first User filtered by the password column
 * @method User findOneByDateJoined(string $date_joined) Return the first User filtered by the date_joined column
 * @method User findOneByDateUpdate(string $date_update) Return the first User filtered by the date_update column
 * @method User findOneByDateLastlog(string $date_lastlog) Return the first User filtered by the date_lastlog column
 *
 * @method array findById(int $id) Return User objects filtered by the id column
 * @method array findByName(string $name) Return User objects filtered by the name column
 * @method array findByFirstname(string $firstname) Return User objects filtered by the firstname column
 * @method array findByAddress(string $address) Return User objects filtered by the address column
 * @method array findByPostalCode(string $postal_code) Return User objects filtered by the postal_code column
 * @method array findByCity(string $city) Return User objects filtered by the city column
 * @method array findByCivility(string $civility) Return User objects filtered by the civility column
 * @method array findByEmail(string $email) Return User objects filtered by the email column
 * @method array findByPassword(string $password) Return User objects filtered by the password column
 * @method array findByDateJoined(string $date_joined) Return User objects filtered by the date_joined column
 * @method array findByDateUpdate(string $date_update) Return User objects filtered by the date_update column
 * @method array findByDateLastlog(string $date_lastlog) Return User objects filtered by the date_lastlog column
 *
 * @package    propel.generator.librairie.om
 */
abstract class BaseUserQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUserQuery object.
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
            $modelName = 'User';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   UserQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UserQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UserQuery) {
            return $criteria;
        }
        $query = new UserQuery(null, null, $modelAlias);

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
     * @return   User|User[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UserPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 User A model object, or null if the key is not found
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
     * @return                 User A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, name, firstname, address, postal_code, city, civility, email, password, date_joined, date_update, date_lastlog FROM user WHERE id = :p0';
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
            $obj = new User();
            $obj->hydrate($row);
            UserPeer::addInstanceToPool($obj, (string) $key);
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
     * @return User|User[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|User[]|mixed the list of results, formatted by the current formatter
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UserPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UserPeer::ID, $keys, Criteria::IN);
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
     * @return UserQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(UserPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(UserPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the firstname column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstname('fooValue');   // WHERE firstname = 'fooValue'
     * $query->filterByFirstname('%fooValue%'); // WHERE firstname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByFirstname($firstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $firstname)) {
                $firstname = str_replace('*', '%', $firstname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::FIRSTNAME, $firstname, $comparison);
    }

    /**
     * Filter the query on the address column
     *
     * Example usage:
     * <code>
     * $query->filterByAddress('fooValue');   // WHERE address = 'fooValue'
     * $query->filterByAddress('%fooValue%'); // WHERE address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $address The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByAddress($address = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $address)) {
                $address = str_replace('*', '%', $address);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::ADDRESS, $address, $comparison);
    }

    /**
     * Filter the query on the postal_code column
     *
     * Example usage:
     * <code>
     * $query->filterByPostalCode('fooValue');   // WHERE postal_code = 'fooValue'
     * $query->filterByPostalCode('%fooValue%'); // WHERE postal_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postalCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByPostalCode($postalCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postalCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postalCode)) {
                $postalCode = str_replace('*', '%', $postalCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::POSTAL_CODE, $postalCode, $comparison);
    }

    /**
     * Filter the query on the city column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $city)) {
                $city = str_replace('*', '%', $city);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::CITY, $city, $comparison);
    }

    /**
     * Filter the query on the civility column
     *
     * Example usage:
     * <code>
     * $query->filterByCivility('fooValue');   // WHERE civility = 'fooValue'
     * $query->filterByCivility('%fooValue%'); // WHERE civility LIKE '%fooValue%'
     * </code>
     *
     * @param     string $civility The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByCivility($civility = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($civility)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $civility)) {
                $civility = str_replace('*', '%', $civility);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::CIVILITY, $civility, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserPeer::PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the date_joined column
     *
     * Example usage:
     * <code>
     * $query->filterByDateJoined('2011-03-14'); // WHERE date_joined = '2011-03-14'
     * $query->filterByDateJoined('now'); // WHERE date_joined = '2011-03-14'
     * $query->filterByDateJoined(array('max' => 'yesterday')); // WHERE date_joined < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateJoined The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByDateJoined($dateJoined = null, $comparison = null)
    {
        if (is_array($dateJoined)) {
            $useMinMax = false;
            if (isset($dateJoined['min'])) {
                $this->addUsingAlias(UserPeer::DATE_JOINED, $dateJoined['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateJoined['max'])) {
                $this->addUsingAlias(UserPeer::DATE_JOINED, $dateJoined['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::DATE_JOINED, $dateJoined, $comparison);
    }

    /**
     * Filter the query on the date_update column
     *
     * Example usage:
     * <code>
     * $query->filterByDateUpdate('2011-03-14'); // WHERE date_update = '2011-03-14'
     * $query->filterByDateUpdate('now'); // WHERE date_update = '2011-03-14'
     * $query->filterByDateUpdate(array('max' => 'yesterday')); // WHERE date_update < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateUpdate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByDateUpdate($dateUpdate = null, $comparison = null)
    {
        if (is_array($dateUpdate)) {
            $useMinMax = false;
            if (isset($dateUpdate['min'])) {
                $this->addUsingAlias(UserPeer::DATE_UPDATE, $dateUpdate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateUpdate['max'])) {
                $this->addUsingAlias(UserPeer::DATE_UPDATE, $dateUpdate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::DATE_UPDATE, $dateUpdate, $comparison);
    }

    /**
     * Filter the query on the date_lastlog column
     *
     * Example usage:
     * <code>
     * $query->filterByDateLastlog('2011-03-14'); // WHERE date_lastlog = '2011-03-14'
     * $query->filterByDateLastlog('now'); // WHERE date_lastlog = '2011-03-14'
     * $query->filterByDateLastlog(array('max' => 'yesterday')); // WHERE date_lastlog < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateLastlog The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function filterByDateLastlog($dateLastlog = null, $comparison = null)
    {
        if (is_array($dateLastlog)) {
            $useMinMax = false;
            if (isset($dateLastlog['min'])) {
                $this->addUsingAlias(UserPeer::DATE_LASTLOG, $dateLastlog['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateLastlog['max'])) {
                $this->addUsingAlias(UserPeer::DATE_LASTLOG, $dateLastlog['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserPeer::DATE_LASTLOG, $dateLastlog, $comparison);
    }

    /**
     * Filter the query by a related History object
     *
     * @param   History|PropelObjectCollection $history  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 UserQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByHistory($history, $comparison = null)
    {
        if ($history instanceof History) {
            return $this
                ->addUsingAlias(UserPeer::ID, $history->getUserId(), $comparison);
        } elseif ($history instanceof PropelObjectCollection) {
            return $this
                ->useHistoryQuery()
                ->filterByPrimaryKeys($history->getPrimaryKeys())
                ->endUse();
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
     * @return UserQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   User $user Object to remove from the list of results
     *
     * @return UserQuery The current query, for fluid interface
     */
    public function prune($user = null)
    {
        if ($user) {
            $this->addUsingAlias(UserPeer::ID, $user->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
