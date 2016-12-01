<?php


/**
 * Base class that represents a query for the 'artist' table.
 *
 *
 *
 * @method ArtistQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ArtistQuery orderByPseudo($order = Criteria::ASC) Order by the pseudo column
 * @method ArtistQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method ArtistQuery orderByDescription($order = Criteria::ASC) Order by the description column
 *
 * @method ArtistQuery groupById() Group by the id column
 * @method ArtistQuery groupByPseudo() Group by the pseudo column
 * @method ArtistQuery groupByStatut() Group by the statut column
 * @method ArtistQuery groupByDescription() Group by the description column
 *
 * @method ArtistQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ArtistQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ArtistQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ArtistQuery leftJoinWork($relationAlias = null) Adds a LEFT JOIN clause to the query using the Work relation
 * @method ArtistQuery rightJoinWork($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Work relation
 * @method ArtistQuery innerJoinWork($relationAlias = null) Adds a INNER JOIN clause to the query using the Work relation
 *
 * @method Artist findOne(PropelPDO $con = null) Return the first Artist matching the query
 * @method Artist findOneOrCreate(PropelPDO $con = null) Return the first Artist matching the query, or a new Artist object populated from the query conditions when no match is found
 *
 * @method Artist findOneByPseudo(string $pseudo) Return the first Artist filtered by the pseudo column
 * @method Artist findOneByStatut(string $statut) Return the first Artist filtered by the statut column
 * @method Artist findOneByDescription(string $description) Return the first Artist filtered by the description column
 *
 * @method array findById(int $id) Return Artist objects filtered by the id column
 * @method array findByPseudo(string $pseudo) Return Artist objects filtered by the pseudo column
 * @method array findByStatut(string $statut) Return Artist objects filtered by the statut column
 * @method array findByDescription(string $description) Return Artist objects filtered by the description column
 *
 * @package    propel.generator.librairie.om
 */
abstract class BaseArtistQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseArtistQuery object.
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
            $modelName = 'Artist';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ArtistQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ArtistQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ArtistQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ArtistQuery) {
            return $criteria;
        }
        $query = new ArtistQuery(null, null, $modelAlias);

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
     * @return   Artist|Artist[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ArtistPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ArtistPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Artist A model object, or null if the key is not found
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
     * @return                 Artist A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, pseudo, statut, description FROM artist WHERE id = :p0';
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
            $obj = new Artist();
            $obj->hydrate($row);
            ArtistPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Artist|Artist[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Artist[]|mixed the list of results, formatted by the current formatter
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
     * @return ArtistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArtistPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ArtistQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArtistPeer::ID, $keys, Criteria::IN);
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
     * @return ArtistQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ArtistPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ArtistPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArtistPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the pseudo column
     *
     * Example usage:
     * <code>
     * $query->filterByPseudo('fooValue');   // WHERE pseudo = 'fooValue'
     * $query->filterByPseudo('%fooValue%'); // WHERE pseudo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pseudo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArtistQuery The current query, for fluid interface
     */
    public function filterByPseudo($pseudo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pseudo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pseudo)) {
                $pseudo = str_replace('*', '%', $pseudo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArtistPeer::PSEUDO, $pseudo, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut('fooValue');   // WHERE statut = 'fooValue'
     * $query->filterByStatut('%fooValue%'); // WHERE statut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArtistQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statut)) {
                $statut = str_replace('*', '%', $statut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArtistPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArtistQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ArtistPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query by a related Work object
     *
     * @param   Work|PropelObjectCollection $work  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ArtistQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByWork($work, $comparison = null)
    {
        if ($work instanceof Work) {
            return $this
                ->addUsingAlias(ArtistPeer::ID, $work->getArtistId(), $comparison);
        } elseif ($work instanceof PropelObjectCollection) {
            return $this
                ->useWorkQuery()
                ->filterByPrimaryKeys($work->getPrimaryKeys())
                ->endUse();
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
     * @return ArtistQuery The current query, for fluid interface
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
     * @param   Artist $artist Object to remove from the list of results
     *
     * @return ArtistQuery The current query, for fluid interface
     */
    public function prune($artist = null)
    {
        if ($artist) {
            $this->addUsingAlias(ArtistPeer::ID, $artist->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
