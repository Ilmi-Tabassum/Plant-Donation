<?php

class amountTest extends \PHPUnit\Framework\TestCase
{
	/** @test */
	public function adds_up_given_operands()
	{
		$addition = new \App\Record_Test\Addition;
		$addition->setOperands([45, 10, 25, 100]);

		$this->assertEquals(180, $addition->calculate());
	}

	/** @test */
	public function no_operands_throws_exception_when_calculating()
	{
		$this->expectException(\App\Record_Test\Exceptions\NoOperandsException::class);

		$addition = new \App\Record_Test\Addition;
		$addition->calculate();
	}
}