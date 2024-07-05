<?php
class TreeNode {
    public $val;
    public $left;
    public $right;
    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

function isSameTree($p, $q) {
    // If both nodes are null, they are the same
    if ($p === null && $q === null) {
        return true;
    }
    // If one of the nodes is null, they are not the same
    if ($p === null || $q === null) {
        return false;
    }
    // If the values of the nodes are different, they are not the same
    if ($p->val !== $q->val) {
        return false;
    }
    // Recursively check the left and right subtrees
    return isSameTree($p->left, $q->left) && isSameTree($p->right, $q->right);
}

// Example usage
$p = new TreeNode(1, new TreeNode(2), new TreeNode(3));
$q = new TreeNode(1, new TreeNode(2), new TreeNode(3));

$result = isSameTree($p, $q);
echo $result ? 'true' : 'false';
?>
