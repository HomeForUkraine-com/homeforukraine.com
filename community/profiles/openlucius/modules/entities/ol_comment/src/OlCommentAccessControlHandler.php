<?php

namespace Drupal\ol_comment;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the OL Comment entity.
 *
 * @see \Drupal\ol_comment\Entity\OlComment.
 */
class OlCommentAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\ol_comment\Entity\OlCommentInterface $entity */

    switch ($operation) {

      case 'view':

        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished ol comment entities');
        }


        return AccessResult::allowedIfHasPermission($account, 'view published ol comment entities');

      case 'update':

        return AccessResult::allowedIfHasPermission($account, 'edit ol comment entities');

      case 'delete':

        return AccessResult::allowedIfHasPermission($account, 'delete ol comment entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add ol comment entities');
  }


}
