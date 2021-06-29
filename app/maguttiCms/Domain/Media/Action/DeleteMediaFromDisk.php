<?php


namespace App\maguttiCms\Domain\Media\Action;


use App\Media;
use Illuminate\Support\Facades\Storage;

/**
 * Class DeleteMediaFromDisk
 * @package App\maguttiCms\Domain\Media\Action
 */
class DeleteMediaFromDisk
{


    private Media $media;
    private $storage;
    private string $disk = 'media';
    private string $path;

    public function __construct(Media $media)
    {
        $this->media = $media;
        $this->init()->resolvePath();
    }

    function execute()
    {
        return $this->delete();
    }

    protected function init()
    {
        $this->disk = ($this->media->disk) ? $this->media->disk : $this->disk;
        $this->storage = Storage::disk($this->disk);
        return $this;
    }

    function delete()
    {
        if ($this->storage->exists($this->path)) {
            return $this->storage->delete($this->path);
        }
        return false;

    }

    protected function resolvePath()
    {
        $this->path = $this->media->collection_name . '/' . $this->media->file_name;
        return $this;
    }

}