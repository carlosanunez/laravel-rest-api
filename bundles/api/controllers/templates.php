<?php

class Api_Templates_Controller extends Controller {

    /**
     * Catch-all method for requests that can't be matched.
     *
     * @param  string    $method
     * @param  array     $parameters
     * @return Response
     */
    public function __call($method, $parameters)
    {
        return Response::error('404');
    }

    public $restful = true;

    public function get_index($id = null)
    {
        if (is_null($id))
            return Response::eloquent(Template::all());
        else {
            $template = Template::find($id);

            if (is_null($template))
                return Response::json('Template not found', 404);
            else
                return Response::eloquent($template);
        }
    }

    public function post_index()
    {

    }

    public function put_index()
    {

    }

    public function delete_index()
    {

    }
}