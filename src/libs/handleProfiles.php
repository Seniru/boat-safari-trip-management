<?php
    /*
        returns true when viewing own profile
        return false when viewing another profile 
    */

    const VIEW_OWN_PROFILE = 1;
    const VIEW_OTHER_PROFILE = 2;
    const UNAUTHORIZED_VIEW = 3;
    function is_viewing_own_profile($viewer_id, $viewer_role, $target_id, $target_role) {
        // no query parameters
        if (is_null($target_id) || $target_id == "") {
            if ($viewer_role == $target_role) return VIEW_OWN_PROFILE;
            return UNAUTHORIZED_VIEW;
        } else {
            if ($viewer_id == $target_id && $viewer_role == $target_role) return VIEW_OWN_PROFILE;
            return VIEW_OTHER_PROFILE;
        }
    }
?>