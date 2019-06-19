<?php
/**
 * ACF Codifier email field.
 */

namespace Geniem\ACF\Field;

/**
 * Class Email
 */
class Email extends \Geniem\ACF\Field {
    /**
     * Field type.
     *
     * @var string Email
     */
    protected $type = 'email';

    /**
     * Field's placeholder.
     *
     * @var string
     */
    protected $placeholder;

    /**
     * Field's prepend value.
     *
     * @var string
     */
    protected $prepend;

    /**
     * Field's append value.
     *
     * @var string
     */
    protected $append;

    /**
     * Whether the field is read only
     *
     * @var boolean
     */
    protected $readonly = false;

    /**
     * Set the placeholder of the field.
     *
     * @param string $placeholder The placeholder of the field.
     * @return self
     */
    public function set_placeholder( string $placeholder ) {
        $this->placeholder = $placeholder;

        return $this;
    }

    /**
     * Get the placeholder of the field.
     *
     * @return string
     */
    public function get_placeholder() {
        return $this->placeholder;
    }

    /**
     * Set the prepend value of the field.
     *
     * @param string $prepend The prepend value.
     * @return self
     */
    public function set_prepend( string $prepend ) {
        $this->prepend = $prepend;

        return $this;
    }

    /**
     * Get the prepend value of the field.
     *
     * @return string
     */
    public function get_prepend() {
        return $this->prepend;
    }

    /**
     * Set the append value of the field.
     *
     * @param string $append The append value.
     * @return self
     */
    public function set_append( string $append ) {
        $this->append = $append;

        return $this;
    }

    /**
     * Get the append value of the field.
     *
     * @return string
     */
    public function get_append() {
        return $this->append;
    }

    /**
     * Set field to read only
     *
     * @return self
     */
    public function set_readonly() {
        $this->readonly = true;

        return $this;
    }

    /**
     * Set field to writable
     *
     * @return self
     */
    public function set_writable() {
        $this->readonly = false;

        return $this;
    }

    /**
     * Get field readonly state
     *
     * @return boolean
     */
    public function get_readonly() {
        return $this->readonly;
    }
}
