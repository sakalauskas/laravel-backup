<?php namespace BackupManager\Laravel;

/**
 * Class Laravel5Compatibility
 * @package BackupManager\Laravel
 */
trait Laravel5Compatibility {
    /**
     * @param array $headers
     * @param array $rows
     * @internal param string $style
     * @return void
     */
    public function table($headers, $rows, $tableStyle = 'default', array $columnStyles = [])
    {
        $table = $this->getHelperSet()->get('table');
        $table->setHeaders($headers);
        $table->setRows($rows);
        $table->render($this->output);
    }
}
