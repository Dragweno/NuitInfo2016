<?php


/**
 * Base class that represents a query for the 'work' table.
 *
 *
 *
 * @method WorkQuery orderById($order = Criteria::ASC) Order by the id column
 * @method WorkQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method WorkQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method WorkQuery orderByHeight($order = Criteria::ASC) Order by the height column
 * @method WorkQuery orderByWidth($order = Criteria::ASC) Order by the width column
 * @method WorkQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method WorkQuery orderByFilename($order = Criteria::ASC) Order by the filename column
 * @method WorkQuery orderByFilesize($order = Criteria::ASC) Order by the filesize column
 * @method WorkQuery orderByStock($order = Criteria::ASC) Order by the stock column
 * @method WorkQuery orderByRate($order = Criteria::ASC) Order by the rate column
 * @method WorkQuery orderByDatePost($order = Criteria::ASC) Order by the date_post column
 * @method WorkQuery orderByArtistId($order = Criteria::ASC) Order by the artist_id column
 * @method WorkQuery orderByCategoryId($order = Criteria::ASC) Order by the category_id column
 *
 * @method WorkQuery groupById() Group by the id column
 * @method WorkQuery groupByTitle() Group by the title column
 * @method WorkQuery groupByDescription() Group by the description column
 * @method WorkQuery groupByHeight() Group by the height column
 * @method WorkQuery groupByWidth() Group by the width column
 * @method WorkQuery groupByPrice() Group by the price column
 * @method WorkQuery groupByFilename() Group by the filename column
 * @method WorkQuery groupByFilesize() Group by the filesize column
 * @method WorkQuery groupByStock() Group by the stock column
 * @method WorkQuery groupByRate() Group by the rate column
 * @method WorkQuery groupByDatePost() Group by the date_post column
 * @method WorkQuery groupByArtistId() Group by the artist_id column
 * @method WorkQuery groupByCategoryId() Group by the category_id column
 *
 * @method WorkQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method WorkQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method WorkQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method WorkQuery leftJoinArtist($relationAlias = null) Adds a LEFT JOIN clause to the query using the Artist relation
 * @method WorkQuery rightJoinArtist($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Artist relation
 * @method WorkQuery innerJoinArtist($relationAlias = null) Adds a INNER JOIN clause to the query using the Artist relation
 *
 * @method WorkQuery leftJoinCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the Category relation
 * @method WorkQuery rightJoinCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Category relation
 * @method WorkQuery innerJoinCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the Category relation
 *
 * @method WorkQuery leftJoinOrderWorkByid($relationAlias = null) Adds a LEFT JOIN clause to the query using the OrderWorkByid relation
 * @method WorkQuery rightJoinOrderWorkByid($relationAlias = null) Adds a RIGHT JOIN clause to the query using the OrderWorkByid relation
 * @method WorkQuery innerJoinOrderWorkByid($relationAlias = null) Adds a INNER JOIN clause to the query using the OrderWorkByid relation
 *
 * @method Work findOne(PropelPDO $con = null) Return the first Work matching the query
 * @method Work findOneOrCreate(PropelPDO $con = null) Return the first Work matching the query, or a new Work object populated from the query conditions when no match is found
 *
 * @method Work findOneByTitle(string $title) Return the first Work filtered by the title column
 * @method Work findOneByDescription(string $description) Return the first Work filtered by the description column
 * @method Work findOneByHeight(int $height) Return the first Work filtered by the height column
 * @method Work findOneByWidth(int $width) Return the first Work filtered by the width column
 * @method Work findOneByPrice(double $price) Return the first Work filtered by the price column
 * @method Work findOneByFilename(string $filename) Return the first Work filtered by the filename column
 * @method Work findOneByFilesize(double $filesize) Return the first Work filtered by the filesize column
 * @method Work findOneByStock(int $stock) Return the first Work filtered by the stock column
 * @method Work findOneByRate(double $rate) Return the first Work filtered by the rate column
 * @method Work findOneByDatePost(string $date_post) Return the first Work filtered by the date_post column
 * @method Work findOneByArtistId(int $artist_id) Return the first Work filtered by the artist_id column
 * @method Work findOneByCategoryId(int $category_id) Return the first Work filtered by the category_id column
 *
 * @method array findById(int $id) Return Work objects filtered by the id column
 * @method array findByTitle(string $title) Return Work objects filtered by the title column
 * @method array findByDescription(string $description) Return Work objects filtered by the description column
 * @method array findByHeight(int $height) Return Work objects filtered by the height column
 * @method array findByWidth(int $width) Return Work objects filtered by the width column
 * @method array findByPrice(double $price) Return Work objects filtered by the price column
 * @method array findByFilename(string $filename) Return Work objects filtered by the filename column
 * @method array findByFilesize(double $filesize) Return Work objects filtered by the filesize column
 * @method array findByStock(int $stock) Return Work objects filtered by the stock column
 * @method array findByRate(double $rate) Return Work objects filtered by the rate column
 * @method array findByDatePost(string $date_post) Return Work objects filtered by the date_post column
 * @method array findByArtistId(int $artist_id) Return Work objects filtered by the artist_id column
 * @method array findByCategoryId(int $category_id) Return Work objects filtered by the category_id column
 *
 * @package    propel.generator.librairie.om
 */
abstract class BaseWorkQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseWorkQuery object.
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
            $modelName = 'Work';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new WorkQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   WorkQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return WorkQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof WorkQuery) {
            return $criteria;
        }
        $query = new WorkQuery(null, null, $modelAlias);

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
     * @return   Work|Work[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = WorkPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(WorkPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Work A model object, or null if the key is not found
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
     * @return                 Work A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT id, title, description, height, width, price, filename, filesize, stock, rate, date_post, artist_id, category_id FROM work WHERE id = :p0';
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
            $obj = new Work();
            $obj->hydrate($row);
            WorkPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Work|Work[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Work[]|mixed the list of results, formatted by the current formatter
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
     * @return WorkQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(WorkPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(WorkPeer::ID, $keys, Criteria::IN);
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
     * @return WorkQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(WorkPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(WorkPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WorkPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WorkPeer::TITLE, $title, $comparison);
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
     * @return WorkQuery The current query, for fluid interface
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

        return $this->addUsingAlias(WorkPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the height column
     *
     * Example usage:
     * <code>
     * $query->filterByHeight(1234); // WHERE height = 1234
     * $query->filterByHeight(array(12, 34)); // WHERE height IN (12, 34)
     * $query->filterByHeight(array('min' => 12)); // WHERE height >= 12
     * $query->filterByHeight(array('max' => 12)); // WHERE height <= 12
     * </code>
     *
     * @param     mixed $height The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function filterByHeight($height = null, $comparison = null)
    {
        if (is_array($height)) {
            $useMinMax = false;
            if (isset($height['min'])) {
                $this->addUsingAlias(WorkPeer::HEIGHT, $height['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($height['max'])) {
                $this->addUsingAlias(WorkPeer::HEIGHT, $height['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WorkPeer::HEIGHT, $height, $comparison);
    }

    /**
     * Filter the query on the width column
     *
     * Example usage:
     * <code>
     * $query->filterByWidth(1234); // WHERE width = 1234
     * $query->filterByWidth(array(12, 34)); // WHERE width IN (12, 34)
     * $query->filterByWidth(array('min' => 12)); // WHERE width >= 12
     * $query->filterByWidth(array('max' => 12)); // WHERE width <= 12
     * </code>
     *
     * @param     mixed $width The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function filterByWidth($width = null, $comparison = null)
    {
        if (is_array($width)) {
            $useMinMax = false;
            if (isset($width['min'])) {
                $this->addUsingAlias(WorkPeer::WIDTH, $width['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($width['max'])) {
                $this->addUsingAlias(WorkPeer::WIDTH, $width['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WorkPeer::WIDTH, $width, $comparison);
    }

    /**
     * Filter the query on the price column
     *
     * Example usage:
     * <code>
     * $query->filterByPrice(1234); // WHERE price = 1234
     * $query->filterByPrice(array(12, 34)); // WHERE price IN (12, 34)
     * $query->filterByPrice(array('min' => 12)); // WHERE price >= 12
     * $query->filterByPrice(array('max' => 12)); // WHERE price <= 12
     * </code>
     *
     * @param     mixed $price The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (is_array($price)) {
            $useMinMax = false;
            if (isset($price['min'])) {
                $this->addUsingAlias(WorkPeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($price['max'])) {
                $this->addUsingAlias(WorkPeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WorkPeer::PRICE, $price, $comparison);
    }

    /**
     * Filter the query on the filename column
     *
     * Example usage:
     * <code>
     * $query->filterByFilename('fooValue');   // WHERE filename = 'fooValue'
     * $query->filterByFilename('%fooValue%'); // WHERE filename LIKE '%fooValue%'
     * </code>
     *
     * @param     string $filename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function filterByFilename($filename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($filename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $filename)) {
                $filename = str_replace('*', '%', $filename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(WorkPeer::FILENAME, $filename, $comparison);
    }

    /**
     * Filter the query on the filesize column
     *
     * Example usage:
     * <code>
     * $query->filterByFilesize(1234); // WHERE filesize = 1234
     * $query->filterByFilesize(array(12, 34)); // WHERE filesize IN (12, 34)
     * $query->filterByFilesize(array('min' => 12)); // WHERE filesize >= 12
     * $query->filterByFilesize(array('max' => 12)); // WHERE filesize <= 12
     * </code>
     *
     * @param     mixed $filesize The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function filterByFilesize($filesize = null, $comparison = null)
    {
        if (is_array($filesize)) {
            $useMinMax = false;
            if (isset($filesize['min'])) {
                $this->addUsingAlias(WorkPeer::FILESIZE, $filesize['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($filesize['max'])) {
                $this->addUsingAlias(WorkPeer::FILESIZE, $filesize['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WorkPeer::FILESIZE, $filesize, $comparison);
    }

    /**
     * Filter the query on the stock column
     *
     * Example usage:
     * <code>
     * $query->filterByStock(1234); // WHERE stock = 1234
     * $query->filterByStock(array(12, 34)); // WHERE stock IN (12, 34)
     * $query->filterByStock(array('min' => 12)); // WHERE stock >= 12
     * $query->filterByStock(array('max' => 12)); // WHERE stock <= 12
     * </code>
     *
     * @param     mixed $stock The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function filterByStock($stock = null, $comparison = null)
    {
        if (is_array($stock)) {
            $useMinMax = false;
            if (isset($stock['min'])) {
                $this->addUsingAlias(WorkPeer::STOCK, $stock['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stock['max'])) {
                $this->addUsingAlias(WorkPeer::STOCK, $stock['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WorkPeer::STOCK, $stock, $comparison);
    }

    /**
     * Filter the query on the rate column
     *
     * Example usage:
     * <code>
     * $query->filterByRate(1234); // WHERE rate = 1234
     * $query->filterByRate(array(12, 34)); // WHERE rate IN (12, 34)
     * $query->filterByRate(array('min' => 12)); // WHERE rate >= 12
     * $query->filterByRate(array('max' => 12)); // WHERE rate <= 12
     * </code>
     *
     * @param     mixed $rate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function filterByRate($rate = null, $comparison = null)
    {
        if (is_array($rate)) {
            $useMinMax = false;
            if (isset($rate['min'])) {
                $this->addUsingAlias(WorkPeer::RATE, $rate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rate['max'])) {
                $this->addUsingAlias(WorkPeer::RATE, $rate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WorkPeer::RATE, $rate, $comparison);
    }

    /**
     * Filter the query on the date_post column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePost('2011-03-14'); // WHERE date_post = '2011-03-14'
     * $query->filterByDatePost('now'); // WHERE date_post = '2011-03-14'
     * $query->filterByDatePost(array('max' => 'yesterday')); // WHERE date_post < '2011-03-13'
     * </code>
     *
     * @param     mixed $datePost The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function filterByDatePost($datePost = null, $comparison = null)
    {
        if (is_array($datePost)) {
            $useMinMax = false;
            if (isset($datePost['min'])) {
                $this->addUsingAlias(WorkPeer::DATE_POST, $datePost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datePost['max'])) {
                $this->addUsingAlias(WorkPeer::DATE_POST, $datePost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WorkPeer::DATE_POST, $datePost, $comparison);
    }

    /**
     * Filter the query on the artist_id column
     *
     * Example usage:
     * <code>
     * $query->filterByArtistId(1234); // WHERE artist_id = 1234
     * $query->filterByArtistId(array(12, 34)); // WHERE artist_id IN (12, 34)
     * $query->filterByArtistId(array('min' => 12)); // WHERE artist_id >= 12
     * $query->filterByArtistId(array('max' => 12)); // WHERE artist_id <= 12
     * </code>
     *
     * @see       filterByArtist()
     *
     * @param     mixed $artistId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function filterByArtistId($artistId = null, $comparison = null)
    {
        if (is_array($artistId)) {
            $useMinMax = false;
            if (isset($artistId['min'])) {
                $this->addUsingAlias(WorkPeer::ARTIST_ID, $artistId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artistId['max'])) {
                $this->addUsingAlias(WorkPeer::ARTIST_ID, $artistId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WorkPeer::ARTIST_ID, $artistId, $comparison);
    }

    /**
     * Filter the query on the category_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoryId(1234); // WHERE category_id = 1234
     * $query->filterByCategoryId(array(12, 34)); // WHERE category_id IN (12, 34)
     * $query->filterByCategoryId(array('min' => 12)); // WHERE category_id >= 12
     * $query->filterByCategoryId(array('max' => 12)); // WHERE category_id <= 12
     * </code>
     *
     * @see       filterByCategory()
     *
     * @param     mixed $categoryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function filterByCategoryId($categoryId = null, $comparison = null)
    {
        if (is_array($categoryId)) {
            $useMinMax = false;
            if (isset($categoryId['min'])) {
                $this->addUsingAlias(WorkPeer::CATEGORY_ID, $categoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categoryId['max'])) {
                $this->addUsingAlias(WorkPeer::CATEGORY_ID, $categoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WorkPeer::CATEGORY_ID, $categoryId, $comparison);
    }

    /**
     * Filter the query by a related Artist object
     *
     * @param   Artist|PropelObjectCollection $artist The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 WorkQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArtist($artist, $comparison = null)
    {
        if ($artist instanceof Artist) {
            return $this
                ->addUsingAlias(WorkPeer::ARTIST_ID, $artist->getId(), $comparison);
        } elseif ($artist instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(WorkPeer::ARTIST_ID, $artist->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByArtist() only accepts arguments of type Artist or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Artist relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function joinArtist($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Artist');

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
            $this->addJoinObject($join, 'Artist');
        }

        return $this;
    }

    /**
     * Use the Artist relation Artist object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ArtistQuery A secondary query class using the current class as primary query
     */
    public function useArtistQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinArtist($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Artist', 'ArtistQuery');
    }

    /**
     * Filter the query by a related Category object
     *
     * @param   Category|PropelObjectCollection $category The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 WorkQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCategory($category, $comparison = null)
    {
        if ($category instanceof Category) {
            return $this
                ->addUsingAlias(WorkPeer::CATEGORY_ID, $category->getId(), $comparison);
        } elseif ($category instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(WorkPeer::CATEGORY_ID, $category->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCategory() only accepts arguments of type Category or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Category relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function joinCategory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Category');

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
            $this->addJoinObject($join, 'Category');
        }

        return $this;
    }

    /**
     * Use the Category relation Category object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CategoryQuery A secondary query class using the current class as primary query
     */
    public function useCategoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCategory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Category', 'CategoryQuery');
    }

    /**
     * Filter the query by a related OrderWorkByid object
     *
     * @param   OrderWorkByid|PropelObjectCollection $orderWorkByid  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 WorkQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByOrderWorkByid($orderWorkByid, $comparison = null)
    {
        if ($orderWorkByid instanceof OrderWorkByid) {
            return $this
                ->addUsingAlias(WorkPeer::ID, $orderWorkByid->getWorkId(), $comparison);
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
     * @return WorkQuery The current query, for fluid interface
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
     * Filter the query by a related History object
     * using the order_work_byid table as cross reference
     *
     * @param   History $history the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   WorkQuery The current query, for fluid interface
     */
    public function filterByHistory($history, $comparison = Criteria::EQUAL)
    {
        return $this
            ->useOrderWorkByidQuery()
            ->filterByHistory($history, $comparison)
            ->endUse();
    }

    /**
     * Exclude object from result
     *
     * @param   Work $work Object to remove from the list of results
     *
     * @return WorkQuery The current query, for fluid interface
     */
    public function prune($work = null)
    {
        if ($work) {
            $this->addUsingAlias(WorkPeer::ID, $work->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
