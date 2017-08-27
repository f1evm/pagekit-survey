<?php

namespace fevm\Survey\Controller;

use Pagekit\Application as App;

/**
 * @Access(admin=true)
 * @return string
 */
class SurveyController
{
    /**
     * @return mixed
     */
    public function indexAction()
    {
        return App::response()->redirect( '@survey/settings' );
    }


    /**
     * @Access("survey: manage surveys")
     */
    public function settingsAction()
    {
        return [
            '$view' => [
                'title' => __( 'Survey Settings' ),
                'name'  => 'fevm/survey:views/admin/settings.php'
            ],
            '$data' => [
                'config' => App::module( 'fevm/survey' )->config()
            ]
        ];
    }


    /**
     * @Request({"config": "array"}, csrf=true)
     * @param array $config
     *
     * @return array
     */
    public function saveAction( $config = [] )
    {
        App::config()->set( 'fevm/survey', $config );

        return [ 'message' => 'success' ];
    }

}
