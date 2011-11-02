<?php


/**
 * Base class that represents a row from the 'jqstore_managed_job' table.
 *
 * 
 *
 * @package    propel.generator.jqjobs.om
 */
abstract class BaseJQStoreManagedJob extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'JQStoreManagedJobPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        JQStoreManagedJobPeer
	 */
	protected static $peer;

	/**
	 * The value for the attempt_number field.
	 * @var        int
	 */
	protected $attempt_number;

	/**
	 * The value for the creation_dts field.
	 * @var        string
	 */
	protected $creation_dts;

	/**
	 * The value for the end_dts field.
	 * @var        string
	 */
	protected $end_dts;

	/**
	 * The value for the error_message field.
	 * @var        string
	 */
	protected $error_message;

	/**
	 * The value for the job field.
	 * @var        string
	 */
	protected $job;

	/**
	 * The value for the job_id field.
	 * @var        int
	 */
	protected $job_id;

	/**
	 * The value for the max_attempts field.
	 * @var        int
	 */
	protected $max_attempts;

	/**
	 * The value for the priority field.
	 * @var        int
	 */
	protected $priority;

	/**
	 * The value for the queue_name field.
	 * @var        string
	 */
	protected $queue_name;

	/**
	 * The value for the start_dts field.
	 * @var        string
	 */
	protected $start_dts;

	/**
	 * The value for the status field.
	 * @var        string
	 */
	protected $status;

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
	 * Get the [attempt_number] column value.
	 * 
	 * @return     int
	 */
	public function getAttemptNumber()
	{
		return $this->attempt_number;
	}

	/**
	 * Get the [optionally formatted] temporal [creation_dts] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getCreationDts($format = 'Y-m-d H:i:s')
	{
		if ($this->creation_dts === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->creation_dts);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->creation_dts, true), $x);
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [end_dts] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getEndDts($format = 'Y-m-d H:i:s')
	{
		if ($this->end_dts === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->end_dts);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->end_dts, true), $x);
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [error_message] column value.
	 * 
	 * @return     string
	 */
	public function getErrorMessage()
	{
		return $this->error_message;
	}

	/**
	 * Get the [job] column value.
	 * 
	 * @return     string
	 */
	public function getJob()
	{
		return $this->job;
	}

	/**
	 * Get the [job_id] column value.
	 * 
	 * @return     int
	 */
	public function getJobId()
	{
		return $this->job_id;
	}

	/**
	 * Get the [max_attempts] column value.
	 * 
	 * @return     int
	 */
	public function getMaxAttempts()
	{
		return $this->max_attempts;
	}

	/**
	 * Get the [priority] column value.
	 * 
	 * @return     int
	 */
	public function getPriority()
	{
		return $this->priority;
	}

	/**
	 * Get the [queue_name] column value.
	 * 
	 * @return     string
	 */
	public function getQueueName()
	{
		return $this->queue_name;
	}

	/**
	 * Get the [optionally formatted] temporal [start_dts] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getStartDts($format = 'Y-m-d H:i:s')
	{
		if ($this->start_dts === null) {
			return null;
		}



		try {
			$dt = new DateTime($this->start_dts);
		} catch (Exception $x) {
			throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->start_dts, true), $x);
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [status] column value.
	 * 
	 * @return     string
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * Set the value of [attempt_number] column.
	 * 
	 * @param      int $v new value
	 * @return     JQStoreManagedJob The current object (for fluent API support)
	 */
	public function setAttemptNumber($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->attempt_number !== $v) {
			$this->attempt_number = $v;
			$this->modifiedColumns[] = JQStoreManagedJobPeer::ATTEMPT_NUMBER;
		}

		return $this;
	} // setAttemptNumber()

	/**
	 * Sets the value of [creation_dts] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     JQStoreManagedJob The current object (for fluent API support)
	 */
	public function setCreationDts($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->creation_dts !== null || $dt !== null) {
			$currentDateAsString = ($this->creation_dts !== null && $tmpDt = new DateTime($this->creation_dts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->creation_dts = $newDateAsString;
				$this->modifiedColumns[] = JQStoreManagedJobPeer::CREATION_DTS;
			}
		} // if either are not null

		return $this;
	} // setCreationDts()

	/**
	 * Sets the value of [end_dts] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     JQStoreManagedJob The current object (for fluent API support)
	 */
	public function setEndDts($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->end_dts !== null || $dt !== null) {
			$currentDateAsString = ($this->end_dts !== null && $tmpDt = new DateTime($this->end_dts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->end_dts = $newDateAsString;
				$this->modifiedColumns[] = JQStoreManagedJobPeer::END_DTS;
			}
		} // if either are not null

		return $this;
	} // setEndDts()

	/**
	 * Set the value of [error_message] column.
	 * 
	 * @param      string $v new value
	 * @return     JQStoreManagedJob The current object (for fluent API support)
	 */
	public function setErrorMessage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->error_message !== $v) {
			$this->error_message = $v;
			$this->modifiedColumns[] = JQStoreManagedJobPeer::ERROR_MESSAGE;
		}

		return $this;
	} // setErrorMessage()

	/**
	 * Set the value of [job] column.
	 * 
	 * @param      string $v new value
	 * @return     JQStoreManagedJob The current object (for fluent API support)
	 */
	public function setJob($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->job !== $v) {
			$this->job = $v;
			$this->modifiedColumns[] = JQStoreManagedJobPeer::JOB;
		}

		return $this;
	} // setJob()

	/**
	 * Set the value of [job_id] column.
	 * 
	 * @param      int $v new value
	 * @return     JQStoreManagedJob The current object (for fluent API support)
	 */
	public function setJobId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->job_id !== $v) {
			$this->job_id = $v;
			$this->modifiedColumns[] = JQStoreManagedJobPeer::JOB_ID;
		}

		return $this;
	} // setJobId()

	/**
	 * Set the value of [max_attempts] column.
	 * 
	 * @param      int $v new value
	 * @return     JQStoreManagedJob The current object (for fluent API support)
	 */
	public function setMaxAttempts($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_attempts !== $v) {
			$this->max_attempts = $v;
			$this->modifiedColumns[] = JQStoreManagedJobPeer::MAX_ATTEMPTS;
		}

		return $this;
	} // setMaxAttempts()

	/**
	 * Set the value of [priority] column.
	 * 
	 * @param      int $v new value
	 * @return     JQStoreManagedJob The current object (for fluent API support)
	 */
	public function setPriority($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->priority !== $v) {
			$this->priority = $v;
			$this->modifiedColumns[] = JQStoreManagedJobPeer::PRIORITY;
		}

		return $this;
	} // setPriority()

	/**
	 * Set the value of [queue_name] column.
	 * 
	 * @param      string $v new value
	 * @return     JQStoreManagedJob The current object (for fluent API support)
	 */
	public function setQueueName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->queue_name !== $v) {
			$this->queue_name = $v;
			$this->modifiedColumns[] = JQStoreManagedJobPeer::QUEUE_NAME;
		}

		return $this;
	} // setQueueName()

	/**
	 * Sets the value of [start_dts] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     JQStoreManagedJob The current object (for fluent API support)
	 */
	public function setStartDts($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->start_dts !== null || $dt !== null) {
			$currentDateAsString = ($this->start_dts !== null && $tmpDt = new DateTime($this->start_dts)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->start_dts = $newDateAsString;
				$this->modifiedColumns[] = JQStoreManagedJobPeer::START_DTS;
			}
		} // if either are not null

		return $this;
	} // setStartDts()

	/**
	 * Set the value of [status] column.
	 * 
	 * @param      string $v new value
	 * @return     JQStoreManagedJob The current object (for fluent API support)
	 */
	public function setStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->status !== $v) {
			$this->status = $v;
			$this->modifiedColumns[] = JQStoreManagedJobPeer::STATUS;
		}

		return $this;
	} // setStatus()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
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
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->attempt_number = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->creation_dts = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->end_dts = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->error_message = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->job = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->job_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->max_attempts = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->priority = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->queue_name = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->start_dts = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->status = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 11; // 11 = JQStoreManagedJobPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating JQStoreManagedJob object", $e);
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
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
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
			$con = Propel::getConnection(JQStoreManagedJobPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = JQStoreManagedJobPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(JQStoreManagedJobPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = JQStoreManagedJobQuery::create()
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
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(JQStoreManagedJobPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				JQStoreManagedJobPeer::addInstanceToPool($this);
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
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

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

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Insert the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @throws     PropelException
	 * @see        doSave()
	 */
	protected function doInsert(PropelPDO $con)
	{
		$modifiedColumns = array();
		$index = 0;

		$this->modifiedColumns[] = JQStoreManagedJobPeer::JOB_ID;
		if (null !== $this->job_id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . JQStoreManagedJobPeer::JOB_ID . ')');
		}
		if (null === $this->job_id) {
			try {				
				$stmt = $con->query("SELECT nextval('jqstore_managed_job_job_id_seq')");
				$row = $stmt->fetch(PDO::FETCH_NUM);
				$this->job_id = $row[0];
			} catch (Exception $e) {
				throw new PropelException('Unable to get sequence id.', $e);
			}
		}


		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(JQStoreManagedJobPeer::ATTEMPT_NUMBER)) {
			$modifiedColumns[':p' . $index++]  = 'ATTEMPT_NUMBER';
		}
		if ($this->isColumnModified(JQStoreManagedJobPeer::CREATION_DTS)) {
			$modifiedColumns[':p' . $index++]  = 'CREATION_DTS';
		}
		if ($this->isColumnModified(JQStoreManagedJobPeer::END_DTS)) {
			$modifiedColumns[':p' . $index++]  = 'END_DTS';
		}
		if ($this->isColumnModified(JQStoreManagedJobPeer::ERROR_MESSAGE)) {
			$modifiedColumns[':p' . $index++]  = 'ERROR_MESSAGE';
		}
		if ($this->isColumnModified(JQStoreManagedJobPeer::JOB)) {
			$modifiedColumns[':p' . $index++]  = 'JOB';
		}
		if ($this->isColumnModified(JQStoreManagedJobPeer::JOB_ID)) {
			$modifiedColumns[':p' . $index++]  = 'JOB_ID';
		}
		if ($this->isColumnModified(JQStoreManagedJobPeer::MAX_ATTEMPTS)) {
			$modifiedColumns[':p' . $index++]  = 'MAX_ATTEMPTS';
		}
		if ($this->isColumnModified(JQStoreManagedJobPeer::PRIORITY)) {
			$modifiedColumns[':p' . $index++]  = 'PRIORITY';
		}
		if ($this->isColumnModified(JQStoreManagedJobPeer::QUEUE_NAME)) {
			$modifiedColumns[':p' . $index++]  = 'QUEUE_NAME';
		}
		if ($this->isColumnModified(JQStoreManagedJobPeer::START_DTS)) {
			$modifiedColumns[':p' . $index++]  = 'START_DTS';
		}
		if ($this->isColumnModified(JQStoreManagedJobPeer::STATUS)) {
			$modifiedColumns[':p' . $index++]  = 'STATUS';
		}

		$sql = sprintf(
			'INSERT INTO jqstore_managed_job (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case 'ATTEMPT_NUMBER':
						$stmt->bindValue($identifier, $this->attempt_number, PDO::PARAM_INT);
						break;
					case 'CREATION_DTS':
						$stmt->bindValue($identifier, $this->creation_dts, PDO::PARAM_STR);
						break;
					case 'END_DTS':
						$stmt->bindValue($identifier, $this->end_dts, PDO::PARAM_STR);
						break;
					case 'ERROR_MESSAGE':
						$stmt->bindValue($identifier, $this->error_message, PDO::PARAM_STR);
						break;
					case 'JOB':
						$stmt->bindValue($identifier, $this->job, PDO::PARAM_STR);
						break;
					case 'JOB_ID':
						$stmt->bindValue($identifier, $this->job_id, PDO::PARAM_INT);
						break;
					case 'MAX_ATTEMPTS':
						$stmt->bindValue($identifier, $this->max_attempts, PDO::PARAM_INT);
						break;
					case 'PRIORITY':
						$stmt->bindValue($identifier, $this->priority, PDO::PARAM_INT);
						break;
					case 'QUEUE_NAME':
						$stmt->bindValue($identifier, $this->queue_name, PDO::PARAM_STR);
						break;
					case 'START_DTS':
						$stmt->bindValue($identifier, $this->start_dts, PDO::PARAM_STR);
						break;
					case 'STATUS':
						$stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
						break;
				}
			}
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
		}

		$this->setNew(false);
	}

	/**
	 * Update the row in the database.
	 *
	 * @param      PropelPDO $con
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
	 * @return     array ValidationFailed[]
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
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = JQStoreManagedJobPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = JQStoreManagedJobPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getAttemptNumber();
				break;
			case 1:
				return $this->getCreationDts();
				break;
			case 2:
				return $this->getEndDts();
				break;
			case 3:
				return $this->getErrorMessage();
				break;
			case 4:
				return $this->getJob();
				break;
			case 5:
				return $this->getJobId();
				break;
			case 6:
				return $this->getMaxAttempts();
				break;
			case 7:
				return $this->getPriority();
				break;
			case 8:
				return $this->getQueueName();
				break;
			case 9:
				return $this->getStartDts();
				break;
			case 10:
				return $this->getStatus();
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
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
	{
		if (isset($alreadyDumpedObjects['JQStoreManagedJob'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['JQStoreManagedJob'][$this->getPrimaryKey()] = true;
		$keys = JQStoreManagedJobPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getAttemptNumber(),
			$keys[1] => $this->getCreationDts(),
			$keys[2] => $this->getEndDts(),
			$keys[3] => $this->getErrorMessage(),
			$keys[4] => $this->getJob(),
			$keys[5] => $this->getJobId(),
			$keys[6] => $this->getMaxAttempts(),
			$keys[7] => $this->getPriority(),
			$keys[8] => $this->getQueueName(),
			$keys[9] => $this->getStartDts(),
			$keys[10] => $this->getStatus(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = JQStoreManagedJobPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setAttemptNumber($value);
				break;
			case 1:
				$this->setCreationDts($value);
				break;
			case 2:
				$this->setEndDts($value);
				break;
			case 3:
				$this->setErrorMessage($value);
				break;
			case 4:
				$this->setJob($value);
				break;
			case 5:
				$this->setJobId($value);
				break;
			case 6:
				$this->setMaxAttempts($value);
				break;
			case 7:
				$this->setPriority($value);
				break;
			case 8:
				$this->setQueueName($value);
				break;
			case 9:
				$this->setStartDts($value);
				break;
			case 10:
				$this->setStatus($value);
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
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = JQStoreManagedJobPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setAttemptNumber($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCreationDts($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setEndDts($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setErrorMessage($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setJob($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setJobId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setMaxAttempts($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPriority($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setQueueName($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setStartDts($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setStatus($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(JQStoreManagedJobPeer::DATABASE_NAME);

		if ($this->isColumnModified(JQStoreManagedJobPeer::ATTEMPT_NUMBER)) $criteria->add(JQStoreManagedJobPeer::ATTEMPT_NUMBER, $this->attempt_number);
		if ($this->isColumnModified(JQStoreManagedJobPeer::CREATION_DTS)) $criteria->add(JQStoreManagedJobPeer::CREATION_DTS, $this->creation_dts);
		if ($this->isColumnModified(JQStoreManagedJobPeer::END_DTS)) $criteria->add(JQStoreManagedJobPeer::END_DTS, $this->end_dts);
		if ($this->isColumnModified(JQStoreManagedJobPeer::ERROR_MESSAGE)) $criteria->add(JQStoreManagedJobPeer::ERROR_MESSAGE, $this->error_message);
		if ($this->isColumnModified(JQStoreManagedJobPeer::JOB)) $criteria->add(JQStoreManagedJobPeer::JOB, $this->job);
		if ($this->isColumnModified(JQStoreManagedJobPeer::JOB_ID)) $criteria->add(JQStoreManagedJobPeer::JOB_ID, $this->job_id);
		if ($this->isColumnModified(JQStoreManagedJobPeer::MAX_ATTEMPTS)) $criteria->add(JQStoreManagedJobPeer::MAX_ATTEMPTS, $this->max_attempts);
		if ($this->isColumnModified(JQStoreManagedJobPeer::PRIORITY)) $criteria->add(JQStoreManagedJobPeer::PRIORITY, $this->priority);
		if ($this->isColumnModified(JQStoreManagedJobPeer::QUEUE_NAME)) $criteria->add(JQStoreManagedJobPeer::QUEUE_NAME, $this->queue_name);
		if ($this->isColumnModified(JQStoreManagedJobPeer::START_DTS)) $criteria->add(JQStoreManagedJobPeer::START_DTS, $this->start_dts);
		if ($this->isColumnModified(JQStoreManagedJobPeer::STATUS)) $criteria->add(JQStoreManagedJobPeer::STATUS, $this->status);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(JQStoreManagedJobPeer::DATABASE_NAME);
		$criteria->add(JQStoreManagedJobPeer::JOB_ID, $this->job_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getJobId();
	}

	/**
	 * Generic method to set the primary key (job_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setJobId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getJobId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of JQStoreManagedJob (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setAttemptNumber($this->getAttemptNumber());
		$copyObj->setCreationDts($this->getCreationDts());
		$copyObj->setEndDts($this->getEndDts());
		$copyObj->setErrorMessage($this->getErrorMessage());
		$copyObj->setJob($this->getJob());
		$copyObj->setMaxAttempts($this->getMaxAttempts());
		$copyObj->setPriority($this->getPriority());
		$copyObj->setQueueName($this->getQueueName());
		$copyObj->setStartDts($this->getStartDts());
		$copyObj->setStatus($this->getStatus());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setJobId(NULL); // this is a auto-increment column, so set to default value
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
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     JQStoreManagedJob Clone of current object.
	 * @throws     PropelException
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
	 * @return     JQStoreManagedJobPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new JQStoreManagedJobPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->attempt_number = null;
		$this->creation_dts = null;
		$this->end_dts = null;
		$this->error_message = null;
		$this->job = null;
		$this->job_id = null;
		$this->max_attempts = null;
		$this->priority = null;
		$this->queue_name = null;
		$this->start_dts = null;
		$this->status = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
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
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(JQStoreManagedJobPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseJQStoreManagedJob