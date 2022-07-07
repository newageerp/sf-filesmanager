<?php
namespace Newageerp\SfFilesManager\Object;

use Newageerp\SfBaseEntity\Object\BaseEntity;
use Doctrine\ORM\Mapping as ORM;
use OpenApi\Annotations as OA;

class FilesManagerFolderBase extends BaseEntity
{
    /**
     * @ORM\Column(type="string")
     */
    protected string $folderName = '';

    /**
     * @ORM\Column(type="datetime")
     * @OA\Property (format="string")
     */
    protected ?\DateTime $lastUploadTime = null;

    /**
     * @ORM\Column (type="integer")
     */
    protected int $filesSize = 0;

    /**
     * @ORM\Column (type="integer")
     */
    protected int $filesCount = 0;

    /**
     * @ORM\Column (type="json")
     */
    protected array $shared = [];

    /**
     * @return string
     */
    public function getFolderName(): string
    {
        return $this->folderName;
    }

    /**
     * @param string $folderName
     */
    public function setFolderName(string $folderName): void
    {
        $this->folderName = $folderName;
    }


}