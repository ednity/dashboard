<?php
App::uses('AppModel', 'Model');
/**
 * GroupsUser Model
 *
 * @property User $User
 * @property Group $Group
 */
class GroupsUser extends AppModel {

	public function getUsersNumByGroupId($group_id){
		return $this->find('count', array(
			'conditions' => array(
				'GroupsUser.group_id' => $group_id
				)
			));
	}
}
