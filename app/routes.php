<?php
$routes = [
  '/' => [
    'controller' => 'HomeController',
    'action' => 'index'
  ],
  'dang-ky' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'index'
  ],
  'danh-sach' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'showPhieuDangKy'
  ]
  ,
  'add' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'createPhieuDangKy'
  ]
  ,
  'edit' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'editPhieuDangKy'
  ]
  ,
  'update' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'updatePhieuDangKy'
  ]
  ,
  'delete' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'deletePhieuDangKy'
  ]
  ,
  'register' => [
    'controller' => 'AccountController',
    'action' => 'register'
  ]
  ,
  'login' => [
    'controller' => 'AccountController',
    'action' => 'login'
  ]
  ,
  'logout' => [
    'controller' => 'AccountController',
    'action' => 'logout'
  ],
  'upload-avatar' => [
    'controller' => 'AccountController',
    'action' => 'uploadAvatar'
  ],
  'add-cart' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'addCart'
  ],
  'view-cart' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'viewCart'
  ],
  'empty-cart' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'emptyCart'
  ],
  'delete-cart-item' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'deleteCartItem'
  ],
  'update-cart-item' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'updateCartItem'
  ],
  'delete-ajax' => [
    'controller' => 'PhieuDangKyController',
    'action' => 'deleteAjax'
  ]
];
?>