<?php

namespace App\Entity;

use App\Repository\BeatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BeatRepository::class)]
class Beat
{
    #[ORM\Id]
    #[ORM\GeneratedValue("NONE")]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'float', nullable: true)]
    private $M20;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m19;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m18;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m17;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m16;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m15;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m14;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m13;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m12;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m11;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m10;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m9;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m8;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m7;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m6;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m5;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m4;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m3;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m2;

    #[ORM\Column(type: 'float', nullable: true)]
    private $m1;

    #[ORM\Column(type: 'integer',unique:true)]
    private $currentBeat;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p1;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p2;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p3;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p4;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p5;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p6;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p7;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p8;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p9;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p10;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p11;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p12;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p13;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p14;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p15;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p16;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p17;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p18;

    #[ORM\Column(type: 'float', nullable: true)]
    private $p19;


    #[ORM\Column(type: 'float', nullable: true)]
    private $P20;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?float $id): self
    {

        $this->id = $id;
        return $this;
    }


    public function getM20(): ?float
    {
        return $this->M20;
    }

    public function setM20(?float $M20): self
    {
        $this->M20 = $M20;

        return $this;
    }


    public function getM19(): ?float
    {
        return $this->m19;
    }

    public function setM19(?float $m19): self
    {
        $this->m19 = $m19;

        return $this;
    }

    public function getM18(): ?float
    {
        return $this->m18;
    }

    public function setM18(?float $m18): self
    {
        $this->m18 = $m18;

        return $this;
    }

    public function getM17(): ?float
    {
        return $this->m17;
    }

    public function setM17(?float $m17): self
    {
        $this->m17 = $m17;

        return $this;
    }

    public function getM16(): ?float
    {
        return $this->m16;
    }

    public function setM16(?float $m16): self
    {
        $this->m16 = $m16;

        return $this;
    }

    public function getM15(): ?float
    {
        return $this->m15;
    }

    public function setM15(?float $m15): self
    {
        $this->m15 = $m15;

        return $this;
    }

    public function getM14(): ?float
    {
        return $this->m14;
    }

    public function setM14(?float $m14): self
    {
        $this->m14 = $m14;

        return $this;
    }

    public function getM13(): ?float
    {
        return $this->m13;
    }

    public function setM13(?float $m13): self
    {
        $this->m13 = $m13;

        return $this;
    }

    public function getM12(): ?float
    {
        return $this->m12;
    }

    public function setM12(?float $m12): self
    {
        $this->m12 = $m12;

        return $this;
    }

    public function getM11(): ?float
    {
        return $this->m11;
    }

    public function setM11(?float $m11): self
    {
        $this->m11 = $m11;

        return $this;
    }

    public function getM10(): ?float
    {
        return $this->m10;
    }

    public function setM10(?float $m10): self
    {
        $this->m10 = $m10;

        return $this;
    }

    public function getM9(): ?float
    {
        return $this->m9;
    }

    public function setM9(?float $m9): self
    {
        $this->m9 = $m9;

        return $this;
    }

    public function getM8(): ?float
    {
        return $this->m8;
    }

    public function setM8(?float $m8): self
    {
        $this->m8 = $m8;

        return $this;
    }

    public function getM7(): ?float
    {
        return $this->m7;
    }

    public function setM7(?float $m7): self
    {
        $this->m7 = $m7;

        return $this;
    }

    public function getM6(): ?float
    {
        return $this->m6;
    }

    public function setM6(?float $m6): self
    {
        $this->m6 = $m6;

        return $this;
    }

    public function getM5(): ?float
    {
        return $this->m5;
    }

    public function setM5(?float $m5): self
    {
        $this->m5 = $m5;

        return $this;
    }

    public function getM4(): ?float
    {
        return $this->m4;
    }

    public function setM4(?float $m4): self
    {
        $this->m4 = $m4;

        return $this;
    }

    public function getM3(): ?float
    {
        return $this->m3;
    }

    public function setM3(?float $m3): self
    {
        $this->m3 = $m3;

        return $this;
    }

    public function getM2(): ?float
    {
        return $this->m2;
    }

    public function setM2(?float $m2): self
    {
        $this->m2 = $m2;

        return $this;
    }

    public function getM1(): ?float
    {
        return $this->m1;
    }

    public function setM1(?float $m1): self
    {
        $this->m1 = $m1;

        return $this;
    }

    public function getCurrentBeat(): ?int
    {
        return $this->currentBeat;
    }

    public function setCurrentBeat(?int $currentBeat): self
    {
        $this->currentBeat = $currentBeat;

        return $this;
    }

    public function getP1(): ?float
    {
        return $this->p1;
    }

    public function setP1(?float $p1): self
    {
        $this->p1 = $p1;

        return $this;
    }

    public function getP2(): ?float
    {
        return $this->p2;
    }

    public function setP2(?float $p2): self
    {
        $this->p2 = $p2;

        return $this;
    }

    public function getP3(): ?float
    {
        return $this->p3;
    }

    public function setP3(?float $p3): self
    {
        $this->p3 = $p3;

        return $this;
    }

    public function getP4(): ?float
    {
        return $this->p4;
    }

    public function setP4(?float $p4): self
    {
        $this->p4 = $p4;

        return $this;
    }

    public function getP5(): ?float
    {
        return $this->p5;
    }

    public function setP5(?float $p5): self
    {
        $this->p5 = $p5;

        return $this;
    }

    public function getP6(): ?float
    {
        return $this->p6;
    }

    public function setP6(?float $p6): self
    {
        $this->p6 = $p6;

        return $this;
    }

    public function getP7(): ?float
    {
        return $this->p7;
    }

    public function setP7(?float $p7): self
    {
        $this->p7 = $p7;

        return $this;
    }

    public function getP8(): ?float
    {
        return $this->p8;
    }

    public function setP8(?float $p8): self
    {
        $this->p8 = $p8;

        return $this;
    }

    public function getP9(): ?float
    {
        return $this->p9;
    }

    public function setP9(?float $p9): self
    {
        $this->p9 = $p9;

        return $this;
    }

    public function getP10(): ?float
    {
        return $this->p10;
    }

    public function setP10(?float $p10): self
    {
        $this->p10 = $p10;

        return $this;
    }

    public function getP11(): ?float
    {
        return $this->p11;
    }

    public function setP11(?float $p11): self
    {
        $this->p11 = $p11;

        return $this;
    }

    public function getP12(): ?float
    {
        return $this->p12;
    }

    public function setP12(?float $p12): self
    {
        $this->p12 = $p12;

        return $this;
    }

    public function getP13(): ?float
    {
        return $this->p13;
    }

    public function setP13(?float $p13): self
    {
        $this->p13 = $p13;

        return $this;
    }

    public function getP14(): ?float
    {
        return $this->p14;
    }

    public function setP14(?float $p14): self
    {
        $this->p14 = $p14;

        return $this;
    }

    public function getP15(): ?float
    {
        return $this->p15;
    }

    public function setP15(?float $p15): self
    {
        $this->p15 = $p15;

        return $this;
    }

    public function getP16(): ?float
    {
        return $this->p16;
    }

    public function setP16(?float $p16): self
    {
        $this->p16 = $p16;

        return $this;
    }

    public function getP17(): ?float
    {
        return $this->p17;
    }

    public function setP17(?float $p17): self
    {
        $this->p17 = $p17;

        return $this;
    }

    public function getP18(): ?float
    {
        return $this->p18;
    }

    public function setP18(?float $p18): self
    {
        $this->p18 = $p18;

        return $this;
    }

    public function getP19(): ?float
    {
        return $this->p19;
    }

    public function setP19(?float $p19): self
    {
        $this->p19 = $p19;

        return $this;
    }


    public function getP20(): ?float
    {
        return $this->P20;
    }

    public function setP20(?float $P20): self
    {
        $this->P20 = $P20;

        return $this;
    }
}
