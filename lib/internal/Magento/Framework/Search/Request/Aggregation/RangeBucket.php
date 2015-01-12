<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Search\Request\Aggregation;

use Magento\Framework\Search\Request\BucketInterface;

/**
 * Range Buckets
 */
class RangeBucket implements BucketInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $field;

    /**
     * @var array
     */
    protected $metrics;

    /**
     * @var Range[]
     */
    protected $ranges;

    /**
     * @param string $name
     * @param string $field
     * @param array $metrics
     * @param Range[] $ranges
     */
    public function __construct($name, $field, array $metrics, array $ranges)
    {
        $this->name = $name;
        $this->field = $field;
        $this->metrics = $metrics;
        $this->ranges = $ranges;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return BucketInterface::TYPE_RANGE;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * {@inheritdoc}
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * Get Ranges
     *
     * @return Range[]
     */
    public function getRanges()
    {
        return $this->ranges;
    }
}
