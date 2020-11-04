<?php


namespace OpenApi\Model\Api;

use OpenApi\Annotations as OA;
use OpenApi\Model\Api\ModelTrait\translatable;
use Thelia\Model\AttributeAv;
use Thelia\Model\AttributeAvQuery;
use Thelia\Model\AttributeCombination;
use OpenApi\Constraint as Constraint;

/**
 * Class Attribute
 * @package OpenApi\Model\Api
 * @OA\Schema(
 *     description="An attribute"
 * )
 */
class Attribute extends BaseApiModel
{
    use translatable;

    /**
     * @var integer
     * @OA\Property(
     *    type="integer",
     * )
     * @Constraint\NotBlank(groups={"read"})
     */
    protected $id;

    /**
     * @var AttributeValue[]
     * @OA\Property(
     *     type="array",
     *     @OA\Items(
     *        ref="#/components/schemas/AttributeValue"
     *     )
     * )
     */
    protected $values;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Attribute
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param array $values
     * @return Attribute
     */
    public function setValues($values)
    {
        $this->values = $values;
        return $this;
    }

    /**
     * "setAttributeId" alias to fit Thelia model

     * @param int $id
     * @return Attribute
     */
    public function setAttributeId($id)
    {
        return $this->setId($id);
    }

    /**
     * "setValues" alias to fit Thelia model
     *
     * @param array $values
     * @return Attribute
     */
    public function setAttributeAvs($values)
    {
        return $this->setValues($values);
    }
}
