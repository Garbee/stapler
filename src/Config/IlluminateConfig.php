<?php namespace Codesleeve\Stapler\Config;

use Illuminate\Config\Repository;

class IlluminateConfig implements ConfigurableInterface
{
    /**
     * An instance of Laravel's config class.
     *
     * @var Repository
     */
    protected $config;

    /**
     * The name of the package this driver is being used with.
     * 
     * @var string
     */
    protected $name;

    /**
     * Constructor method.
     *
     * @param Repository $config
     * @param string $packageName
     */
    function __construct(Repository $config, $name)
    {
        $this->config = $config;
        $this->name = $name;
    }

    /**
     * Retrieve a configuration value.
     *
     * @param $name
     * @return mixed
     */
    public function get($name){
        return $this->config->get($name);
    }

    /**
     * Set a configuration value.
     *
     * @param $name
     * @param $value
     * @return mixed
     */
    public function set($name, $value){
        return $this->config->set($name, $value);
    }
}
