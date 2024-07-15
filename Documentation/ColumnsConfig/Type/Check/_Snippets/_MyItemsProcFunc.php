<?php
class MyItemsProcFunc
{
    /**
     * Add two items to existing ones
     */
    public function itemsProcFunc(array &$params): void
    {
        $params['items'][] = ['label' => 'item 1 from itemProcFunc()', 'value' => 'val1'];
        $params['items'][] = ['label' => 'item 2 from itemProcFunc()', 'value' => 'val2'];
    }
}
