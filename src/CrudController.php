<?php

namespace Lucassilverio\Framework;

use App\Models\Users;

abstract class CrudController
{
    abstract protected function getModel(): string;

    /**
     * @param $container
     * @param $request
     * @return string
     */
    public function index($container, $request)
    {
        return $container[$this->getModel()]->all();
    }

    /**
     * @param $container
     * @param $request
     * @return mixed
     */
    public function show($container, $request)
    {
        $id = $request->attributes->get(1);
        return $container[$this->getModel()]->get(['id' => $id]);
    }

    /**
     * @param $container
     * @param $request
     * @return string
     */
    public function create($container, $request)
    {
        return $container[$this->getModel()]->create($request->request->all());
    }

    /**
     * @param $container
     * @param $request
     * @return string
     */
    public function update($container, $request)
    {
        $id = $request->attributes->get(1);
        return $container[$this->getModel()]->update(['id' => $id], $request->request->all());
    }

    /**
     * @param $container
     * @param $request
     * @return string
     */
    public function delete($container, $request)
    {
        $id = $request->attributes->get(1);
        return $container[$this->getModel()]->delete(['id' => $id]);
    }
}