<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tanggapan Entity
 *
 * @property int $id_tanggapan
 * @property \Cake\I18n\Date $tgl_tanggapan
 * @property string $isi_tanggapan
 * @property int $petugas_id
 * @property int $pengaduan_id
 *
 * @property \App\Model\Entity\Petuga $petuga
 * @property \App\Model\Entity\Pengaduan $pengaduan
 */
class Tanggapan extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'tgl_tanggapan' => true,
        'isi_tanggapan' => true,
        'petugas_id' => true,
        'pengaduan_id' => true,
        'petuga' => true,
        'pengaduan' => true,
    ];
}
