<?php

namespace Admingate\Media\Repositories\Caches;

use Admingate\Media\Repositories\Interfaces\MediaFileInterface;
use Admingate\Support\Repositories\Caches\CacheAbstractDecorator;

class MediaFileCacheDecorator extends CacheAbstractDecorator implements MediaFileInterface
{
    public function createName($name, $folder)
    {
        return $this->flushCacheAndUpdateData(__FUNCTION__, func_get_args());
    }

    public function createSlug($name, $extension, $folder): string
    {
        return $this->flushCacheAndUpdateData(__FUNCTION__, func_get_args());
    }

    public function getFilesByFolderId($folderId, array $params = [], $withFolders = true, $folderParams = [])
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }

    public function emptyTrash()
    {
        return $this->flushCacheAndUpdateData(__FUNCTION__, func_get_args());
    }

    public function getTrashed($folderId, array $params = [], $withFolders = true, $folderParams = [])
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
