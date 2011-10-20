<?php
/**
 * Fixture for test case in SlugBehavior.
 *
 *
 * @filesource
 * @author PRONIQUE Software
 * @link http://www.pronique.com/software/cakephp/sluggable-behavior  
 * @version    1.0
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 * @package app.test
 * @subpackage app.test.fixture
 */

/**
 * A fixture for a testing model
 *
 * @package app.tests
 * @subpackage app.tests.fixtures
 */
class SlugArticleFixture extends CakeTestFixture {
    var $name = 'SlugArticle';
    var $fields = array(
        'id' => array('type' => 'integer', 'key' => 'primary', 'extra'=> 'auto_increment'),
        'slug' => array('type' => 'string', 'null' => false),
        'title' => array('type' => 'string', 'null' => false),
        'subtitle' => array('type' => 'string', 'null' => true),
        'body' => 'text',
        'created' => 'datetime',
        'updated' => 'datetime'
    );
    var $records = array(
        array ('id' => 1, 'slug' => 'first-article', 'title' => 'First Article', 'subtitle' => '', 'body' => 'First Article Body', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
        array ('id' => 2, 'slug' => 'second-article', 'title' => 'Second Article', 'subtitle' => '', 'body' => 'Second Article Body', 'created' => '2007-03-18 10:41:23', 'updated' => '2007-03-18 10:43:31'),
        array ('id' => 3, 'slug' => 'third-article', 'title' => 'Third Article', 'subtitle' => '', 'body' => 'Third Article Body', 'created' => '2007-03-18 10:43:23', 'updated' => '2007-03-18 10:45:31')
    );
}

?>