<?php
namespace ModulesGarden\DomainsReseller\Registrar\RadWebHosting\Calls;
use ModulesGarden\DomainsReseller\Registrar\RadWebHosting\Core\Call;

/**
 * Description of GetNameServers
 *
 * @author inbs
 */
class ToggleIdProtect extends Call
{
    public $action = "domains/:domain/protectid";
    
    public $type = parent::TYPE_POST;
}