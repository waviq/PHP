<?php



namespace Larabook\Statuses;

use Larabook\Users\User;


class StatusRepository {
    
    public function getAllForUser(User $user)
    {
        //orderBy('create_at','desc')
        return $user->statuses()->with('user')->latest()->get();
    }
    
    
        

    /**
     * Simpan Status baru untuk user
     * @param Status $status
     * @param type $userId
     * @return type
     */
    public function save(Status $status, $userId){
        
        return User::findOrFail($userId)
                ->statuses()
                ->save($status);
    }
    
    /**
     * Get the Feed for a user
     * 
     * @param User $user
     * @return type
     */
    public function getFeedForUser(User $user){
        
        $userIds = $user->followedUsers()->lists('followed_id');
        $userIds[] = $user->id;
        
        return Status::with('comments')->whereIn('user_id', $userIds)->latest()->get();
    }
    
    public function leaveComment($userId, $statusId, $body){
        
        $comment = Comment::leave($body, $statusId);
        
        User::findOrFail($userId)->comments()->save($comment);
        
        return $comment;
    }
    
}
