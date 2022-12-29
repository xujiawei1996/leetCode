<?php

//二叉树

class Node
{
    public $data = NULL;
    public $left;
    public $right;
}

class Tree
{

    public $root;

    function __construct()
    {
        $this->root = new Node();
        //$s = new Spl
    }

    //先序遍历
    function preOrder($root)
    {
        $root = $this->root;
        if (empty($root)) {
            return;
        }
        echo $root->data . PHP_EOL;
        $this->preOrder($root->left);
        $this->preOrder($root->right);
        return;
    }

    function midOrder($root)
    {
        $root = $this->root;
        if (empty($root)) {
            return;
        }
        $this->midOrder($root->left);
        echo $root->data;
        $this->midOrder($root->right);
        return;
    }

    function afterOrder($root)
    {
        $root = $this->root;
        if (empty($root)) {
            return;
        }
        $this->afterOrder($root->left);
        $this->afterOrder($root->right);
        echo $root->data;
        return;
    }

    //层序循环
    function levelOrder($root)
    {
        $root  = $this->root;
        $queue = new SplQueue();
        $queue->push($root);
        while (!$queue->isEmpty()) {
            $root = $queue->pop();
            echo $root->data;
            if (!empty($root->left)) $queue->push($root->left);
            if (!empty($root->right)) $queue->push($root->right);
        }
    }

    //求树的高度
    function treeHigh($root)
    {
        if ($root == NULL) {
            return 0;
        }
        $left  = $this->treeHigh($root->left) + 1;
        $right = $this->treeHigh($root->right) + 1;
        return $left > $right ? $left : $right;
    }

    //求树的第K层节点个数
    function getKLevel($root, $k)
    {
        if ($root == NULL || $k < 1)
            return 0;
        if ($k == 1)
            return 1;
        return $this->getKLevel($root->left, $k - 1) + $this->getKLevel($root->right, $k - 1);
    }

    //求两个节点最低公共祖先节点
    function getLCA($root, $node1, $node2)
    {
        if ($root == NULL)
            return NULL;
        if ($root == $node1 || $root == $node2)
            return $root;
        $left  = $this->getLCA($root->left, $node1, $node2);
        $right = $this->getLCA($root->right, $node1, $node2);
        if ($left && $right)
            return $root;
        return $left ? $left : $right;
    }

    //判断是否是平衡二叉树
    function isBalanced($root)
    {
        return self::recer($root) != -1;
    }

    function recer($root)
    {
        if ($root == NULL) return 0;
        $left = $this->recer($root->left);
        if ($left == -1) return -1;
        $right = $this->recer($root->right);
        if ($right == -1) return -1;
        return abs($left - $right) <= 1 ? max($left, $right) + 1 : -1;
    }

    /**
     *
     */

    //给你二叉树的根节点 root 和一个表示目标和的整数 targetSum ，
    //判断该树中是否存在 根节点到叶子节点 的路径，这条路径上所有节点值相加等于目标和 targetSum 。
    /**
     * @param TreeNode $root
     * @param Integer  $targetSum
     *
     * @return Boolean
     */
    function hasPathSum($root, $targetSum)
    {
        if ($root == NULL) {
            return false;
        }

        if ($root->left == NULL || $root->right == NULL)
            return $root->val == $targetSum;

        return $this->hasPathSum($root->left, $targetSum - $root->val)
            || $this->hasPathSum($root->right, $targetSum - $root->val);
    }



    protected $allPathAns = [];
    //二叉树所有路径
    function allPath($root)
    {

        if ($root == NULL)
            return [];
        $this->allPathDfs($root,[]);
        return $this->allPathAns;
    }

    function allPathDfs($root, $path)
    {
        if ($root == NULL){
            return ;
        }
        $path = $path .'->'.$root->val;
        if ($root->left == NULL && $root->right == NULL){
            $this->allPathAns[] = $path;
            return ;
        }
        $this->allPathDfs($root->left,$path);
        $this->allPathDfs($root->right,$path);
    }


    //二叉树所有合等于给定数字的
    protected $allSumPathAns = [];
    //二叉树所有路径
    function allSumPath($root,$target)
    {

        if ($root == NULL)
            return [];
        $this->allSumPathDfs($root,$target,[]);
        return $this->allSumPathAns;
    }

    function allSumPathDfs($root,$target, $path)
    {
        if ($root == NULL){
            return ;
        }
        $path[] = $root->val;
        if ($root->left == NULL && $root->right == NULL){
            if ($target == $root->val){
                $this->allSumPathAns[] = $path;
                return ;
            }
        }
        $this->allSumPathDfs($root->left,$target-$root->val,$path);
        $this->allSumPathDfs($root->right,$target-$root->val,$path);
    }

    /**
     * 对称二叉树
     * @param TreeNode $root
     * @return Boolean
     */
    function isSymmetric($root) {
        if ($root == NULL) {
            return true;
        }
        return self::isSymmetricRoot($root->left,$root->right);
    }

    function isSymmetricRoot($left,$right)
    {
        if ($left == NULL && $right == NULL) return true;
        else if ($left == NULL || $right == NULL) return false;

        if ($left->val != $right->val) return false;

        return self::isSymmetricRoot($left->left,$right->right) && self::isSymmetricRoot($left->right,$right->left);
    }
}

$tree = new Tree();
$tree->test();