<?php
class AddUserIdColumnToPostsTable extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'add_user_id_column_to_posts_table';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
			'create_field' => array(
				'posts' => array(
					'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'after' => 'modified'),
				),
			),
		),
		'down' => array(
			'drop_field' => array(
				'posts' => array('user_id'),
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		return true;
	}
}
