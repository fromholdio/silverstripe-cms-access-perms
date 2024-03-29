<?php

namespace Fromholdio\CMSAccessPermissions;

use SilverStripe\ORM\DataExtension;
use SilverStripe\Security\Permission;

class CMSAccessPermissions extends DataExtension
{
    public function canCreate($member)
    {
        return Permission::check('CMS_ACCESS', 'any');
    }

    public function canView($member)
    {
        return Permission::check('CMS_ACCESS', 'any');
    }

    public function canEdit($member)
    {
        return Permission::check('CMS_ACCESS', 'any');
    }

    public function canDelete($member)
    {
        return Permission::check('CMS_ACCESS', 'any');
    }
}
