<?php

namespace Admingate\Base\Traits;

use Admingate\Base\Events\DeletedContentEvent;
use Admingate\Base\Http\Responses\BaseHttpResponse;
use Admingate\Support\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Http\Request;

trait HasDeleteManyItemsTrait
{
    protected function executeDeleteItems(
        Request $request,
        BaseHttpResponse $response,
        RepositoryInterface $repository,
        string $screen
    ): BaseHttpResponse {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response
                ->setError()
                ->setMessage(trans('core/base::notices.no_select'));
        }

        foreach ($ids as $id) {
            $item = $repository->findOrFail($id);
            if (! $item) {
                continue;
            }

            $repository->delete($item);
            event(new DeletedContentEvent($screen, $request, $item));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
