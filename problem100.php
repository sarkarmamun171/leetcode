<?php 
class TreeNode {
    public $val;
    public $left;
    public $right;
    
    public function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class Solution {
    public $flag = true;
    
    public function isSameTree($p, $q) {
        if ($p == null && $q == null)
            return $this->flag;

        if (($p != null && $q == null) || ($p == null && $q != null) || ($p->val != $q->val))
            return false;

        $this->flag = $this->isSameTree($p->left, $q->left) && $this->isSameTree($p->right, $q->right);
        
        return $this->flag;
    }
}


?>