<?php

require_once dirname(__FILE__) . '/../JQJobs.php';

ini_set('include_path', 
    dirname(__FILE__) . "/../externals/pear/php"
    . ":" . dirname(__FILE__) . "/../lib/propel"
);
require_once 'propel/Propel.php';
Propel::init(dirname(__FILE__) . "/../lib/propel/jqjobs-conf.php");

/************** JQStore_Propel Genterator (TEST DB) ********************/

function getTestJQStore()
{
    return new JQStore_Propel('JQStoreManagedJob', Propel::getConnection(JQStoreManagedJobPeer::DATABASE_NAME));
}

/************** TEST JOBS ****************/

class CTestJob implements JQJob
{
    protected $job;
    function __construct($jobid)
    {
        $this->job=$jobid;
    }
    function run(JQManagedJob $mJob)
    {
        print "running job {$this->job}";
        return JQManagedJob::STATUS_COMPLETED;
    }
    function cleanup() {}
    function statusDidChange(JQManagedJob $mJob, $oldStatus, $message) {}
    function description() { return "job {$this->job}"; }
    function coalesceId() { return NULL; }
}

class QuietSimpleJob implements JQJob
{
    protected $job;
    function __construct($jobid)
    {
        $this->job=$jobid;
    }
    function run(JQManagedJob $mJob) { return JQManagedJob::STATUS_COMPLETED; }
    function cleanup() {}
    function statusDidChange(JQManagedJob $mJob, $oldStatus, $message) {}
    function description() { return "job {$this->job}"; }
    function coalesceId() { return NULL; }
}

class SampleJob implements JQJob
{
    function __construct($info) { $this->info = $info; }
    function run(JQManagedJob $mJob) // no-op
    {
        $this->info->counter++;
        return JQManagedJob::STATUS_COMPLETED;
    }
    function coalesceId() { return NULL; }
    function cleanup() { }
    function statusDidChange(JQManagedJob $mJob, $oldStatus, $message) {}
    function description() { return "Sample job"; }
}

class SampleCoalescingJob extends SampleJob
{
    function __construct($id)
    {
        $this->id = $id;
    }
    function run(JQManagedJob $mJob) { return JQManagedJob::STATUS_COMPLETED; }
    function coalesceId() { return $this->id; }
    function cleanup() { }
    function statusDidChange(JQManagedJob $mJob, $oldStatus, $message) {}
    function description() { return "Coalescing job {$this->id}"; }
}

class SampleFailJob implements JQJob
{
    function __construct($info) { $this->info = $info; }
    function run(JQManagedJob $mJob)
    {
        trigger_error("something went boom", E_USER_ERROR);
        return JQManagedJob::STATUS_FAILED;
    }
    function cleanup() { }
    function coalesceId() { return NULL; }
    function statusDidChange(JQManagedJob $mJob, $oldStatus, $message) {}
    function description() { return "Sample FAIL job"; }
}

class SampleAsyncJob implements JQJob
{
    function __construct($info) { $this->info = $info; }
    function run(JQManagedJob $mJob) { return JQManagedJob::STATUS_WAIT_ASYNC; }
    function cleanup() { }
    function coalesceId() { return NULL; }
    function statusDidChange(JQManagedJob $mJob, $oldStatus, $message) {}
    function description() { return "Sample async job"; }
}
