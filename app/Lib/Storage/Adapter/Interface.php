<?PHP
/*
* @package Thesaurus
* @author sheiko
* @copyright (c) Dmitry Sheiko http://dsheiko.com
*/

interface Lib_Storage_Adapter_Interface
{
    /**
     * Increments click stats for the term
     *
     * @param string $term
     * @return void
     */
    public function incrementClickStat($term);
    /**
    * Increment view stats of each term of given associative array
    * @param array $stats 
    */
    public function commitViewStat(array $stats);
    /**
     * Get glossary
     *
     * @return array
     */
    public function getData();
    /**
     *
     * @param string $term
     * @param boolean $caseSentitive
     * @return string
     */
    public function findDefinition($term, $caseSentitive);
}
