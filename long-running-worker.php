<?php

require_once dirname(__FILE__) . '/test/TestCommon.php';

class NeverEndingJob implements JQJob
{

    public function run(JQManagedJob $mJob)
    {
        while(1)
        {
            // Do nothing
            print("Sleeping 5 seconds...\n");
            sleep(5);
        }
    }
    
    public function cleanup() {}
    public function statusDidChange(JQManagedJob $mJob, $oldStatus, $message) {}

    public function coalesceId()
    {
        return microtime();
    }

    public function description()
    {
        return "This is the job that never ends\nand it goes on and on my friends...";
    }

}

// Get a job running, we'll send it signals as we like
$queue = new JQStore_Array();
$queue->enqueue(new NeverEndingJob(), array('queueName' => 'signal-test'));
$worker = new JQWorker($queue, array('queueName' => 'signal-test'));
$worker->start();

