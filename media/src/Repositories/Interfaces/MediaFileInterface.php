<?php

namespace Admingate\Media\Repositories\Interfaces;

use Admingate\Support\Repositories\Interfaces\RepositoryInterface;

interface MediaFileInterface extends RepositoryInterface
{
    /**
     * @param string $name
     * @param string $folder
     */
    public function createName($name, $folder);

    /**
     * @param string $name
     * @param string $extension
     * @param string $folderPath
     */
    public function createSlug($name, $extension, $folderPath): string;

    /**
     * @param int|string $folderId
     * @param array $params
     * @param bool $withFolders
     * @param array $folderParams
     * @return mixed
     */
    public function getFilesByFolderId($folderId, array $params = [], $withFolders = true, $folderParams = []);

    /**
     * @param int|string $folderId
     * @param array $params
     * @param bool $withFolders
     * @param array $folderParams
     * @return mixed
     */
    public function getTrashed($folderId, array $params = [], $withFolders = true, $folderParams = []);

    /**
     * @return bool
     */
    public function emptyTrash();
}
