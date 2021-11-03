<?php

class m180421_143329_add_column_desc extends yupe\components\DbMigration
{
	public function safeUp()
	{
        $this->addColumn('{{page_page}}', 'desc1', 'text');
        $this->addColumn('{{page_page}}', 'desc2', 'text');
	}

	public function safeDown()
	{
        $this->dropColumn('{{page_page}}', 'desc1');
        $this->dropColumn('{{page_page}}', 'desc2');
	}
}