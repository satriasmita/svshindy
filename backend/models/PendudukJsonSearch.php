<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PendudukJson;

/**
 * PendudukJsonSearch represents the model behind the search form of `backend\models\PendudukJson`.
 */
class PendudukJsonSearch extends PendudukJson
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['penduduk_id', 'NIK', 'JENIS_KLMIN', 'AKTA_LHR', 'GOL_DRH', 'STAT_KWN', 'AKTA_KWN', 'AKTA_CRAI', 'STAT_HBKEL', 'KLAIN_FSK', 'PNYDNG_CCT', 'PDDK_AKH', 'JENIS_PKRJN', 'NIK_IBU', 'NIK_AYAH', 'NIP_PET_REG', 'NIP_PET_ENTRI', 'NO_KK', 'JENIS_BNTU', 'NO_PROP', 'NO_KAB', 'NO_KEC', 'NO_KEL', 'STAT_HIDUP', 'STAT_KTP', 'ALS_NUMPANG', 'SYNC_FLAG', 'COUNT_KTP', 'COUNT_BIODATA', 'EKTP_UPLOAD_LOCATION', 'EKTP_BATCH', 'SMS_COUNT', 'keterangan'], 'integer'],
            [['TMPT_SBL', 'NO_PASPOR', 'TGL_AKH_PASPOR', 'NAMA_LGKP', 'TMPT_LHR', 'TGL_LHR', 'NO_AKTA_LHR', 'AGAMA', 'NO_AKTA_KWN', 'TGL_KWN', 'NO_AKTA_CRAI', 'TGL_CRAI', 'NAMA_LGKP_IBU', 'NAMA_LGKP_AYAH', 'NAMA_KET_RT', 'NAMA_KET_RW', 'NAMA_PET_REG', 'NAMA_PET_ENTRI', 'TGL_ENTRI', 'TGL_UBAH', 'TGL_CETAK_KTP', 'TGL_GANTI_KTP', 'TGL_PJG_KTP', 'PFLAG', 'CFLAG', 'KET_AGAMA', 'KEBANGSAAN', 'GELAR', 'KET_PKRJN', 'GLR_AGAMA', 'GLR_AKADEMIS', 'GLR_BANGSAWAN', 'IS_PROS_DATANG', 'DESC_PEKERJAAN', 'DESC_KEPERCAYAAN', 'FLAG_STATUS', 'FLAGSINK', 'CREATED_BY', 'MODIFIED_BY', 'FLAG_PINDAH', 'EKTP_CURRENT_STATUS_CODE', 'EKTP_CREATED_DATE', 'EKTP_CREATED_BY', 'EKTP_UPDATED_DATE', 'EKTP_UPDATED_BY', 'SMS_PHONE'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PendudukJson::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'penduduk_id' => $this->penduduk_id,
            'NIK' => $this->NIK,
            'TGL_AKH_PASPOR' => $this->TGL_AKH_PASPOR,
            'JENIS_KLMIN' => $this->JENIS_KLMIN,
            'TGL_LHR' => $this->TGL_LHR,
            'AKTA_LHR' => $this->AKTA_LHR,
            'GOL_DRH' => $this->GOL_DRH,
            'STAT_KWN' => $this->STAT_KWN,
            'AKTA_KWN' => $this->AKTA_KWN,
            'TGL_KWN' => $this->TGL_KWN,
            'AKTA_CRAI' => $this->AKTA_CRAI,
            'TGL_CRAI' => $this->TGL_CRAI,
            'STAT_HBKEL' => $this->STAT_HBKEL,
            'KLAIN_FSK' => $this->KLAIN_FSK,
            'PNYDNG_CCT' => $this->PNYDNG_CCT,
            'PDDK_AKH' => $this->PDDK_AKH,
            'JENIS_PKRJN' => $this->JENIS_PKRJN,
            'NIK_IBU' => $this->NIK_IBU,
            'NIK_AYAH' => $this->NIK_AYAH,
            'NIP_PET_REG' => $this->NIP_PET_REG,
            'NIP_PET_ENTRI' => $this->NIP_PET_ENTRI,
            'TGL_ENTRI' => $this->TGL_ENTRI,
            'NO_KK' => $this->NO_KK,
            'JENIS_BNTU' => $this->JENIS_BNTU,
            'NO_PROP' => $this->NO_PROP,
            'NO_KAB' => $this->NO_KAB,
            'NO_KEC' => $this->NO_KEC,
            'NO_KEL' => $this->NO_KEL,
            'STAT_HIDUP' => $this->STAT_HIDUP,
            'TGL_UBAH' => $this->TGL_UBAH,
            'TGL_CETAK_KTP' => $this->TGL_CETAK_KTP,
            'TGL_GANTI_KTP' => $this->TGL_GANTI_KTP,
            'TGL_PJG_KTP' => $this->TGL_PJG_KTP,
            'STAT_KTP' => $this->STAT_KTP,
            'ALS_NUMPANG' => $this->ALS_NUMPANG,
            'SYNC_FLAG' => $this->SYNC_FLAG,
            'COUNT_KTP' => $this->COUNT_KTP,
            'COUNT_BIODATA' => $this->COUNT_BIODATA,
            'EKTP_CREATED_DATE' => $this->EKTP_CREATED_DATE,
            'EKTP_UPDATED_DATE' => $this->EKTP_UPDATED_DATE,
            'EKTP_UPLOAD_LOCATION' => $this->EKTP_UPLOAD_LOCATION,
            'EKTP_BATCH' => $this->EKTP_BATCH,
            'SMS_COUNT' => $this->SMS_COUNT,
            'keterangan' => $this->keterangan,
        ]);

        $query->andFilterWhere(['like', 'TMPT_SBL', $this->TMPT_SBL])
            ->andFilterWhere(['like', 'NO_PASPOR', $this->NO_PASPOR])
            ->andFilterWhere(['like', 'NAMA_LGKP', $this->NAMA_LGKP])
            ->andFilterWhere(['like', 'TMPT_LHR', $this->TMPT_LHR])
            ->andFilterWhere(['like', 'NO_AKTA_LHR', $this->NO_AKTA_LHR])
            ->andFilterWhere(['like', 'AGAMA', $this->AGAMA])
            ->andFilterWhere(['like', 'NO_AKTA_KWN', $this->NO_AKTA_KWN])
            ->andFilterWhere(['like', 'NO_AKTA_CRAI', $this->NO_AKTA_CRAI])
            ->andFilterWhere(['like', 'NAMA_LGKP_IBU', $this->NAMA_LGKP_IBU])
            ->andFilterWhere(['like', 'NAMA_LGKP_AYAH', $this->NAMA_LGKP_AYAH])
            ->andFilterWhere(['like', 'NAMA_KET_RT', $this->NAMA_KET_RT])
            ->andFilterWhere(['like', 'NAMA_KET_RW', $this->NAMA_KET_RW])
            ->andFilterWhere(['like', 'NAMA_PET_REG', $this->NAMA_PET_REG])
            ->andFilterWhere(['like', 'NAMA_PET_ENTRI', $this->NAMA_PET_ENTRI])
            ->andFilterWhere(['like', 'PFLAG', $this->PFLAG])
            ->andFilterWhere(['like', 'CFLAG', $this->CFLAG])
            ->andFilterWhere(['like', 'KET_AGAMA', $this->KET_AGAMA])
            ->andFilterWhere(['like', 'KEBANGSAAN', $this->KEBANGSAAN])
            ->andFilterWhere(['like', 'GELAR', $this->GELAR])
            ->andFilterWhere(['like', 'KET_PKRJN', $this->KET_PKRJN])
            ->andFilterWhere(['like', 'GLR_AGAMA', $this->GLR_AGAMA])
            ->andFilterWhere(['like', 'GLR_AKADEMIS', $this->GLR_AKADEMIS])
            ->andFilterWhere(['like', 'GLR_BANGSAWAN', $this->GLR_BANGSAWAN])
            ->andFilterWhere(['like', 'IS_PROS_DATANG', $this->IS_PROS_DATANG])
            ->andFilterWhere(['like', 'DESC_PEKERJAAN', $this->DESC_PEKERJAAN])
            ->andFilterWhere(['like', 'DESC_KEPERCAYAAN', $this->DESC_KEPERCAYAAN])
            ->andFilterWhere(['like', 'FLAG_STATUS', $this->FLAG_STATUS])
            ->andFilterWhere(['like', 'FLAGSINK', $this->FLAGSINK])
            ->andFilterWhere(['like', 'CREATED_BY', $this->CREATED_BY])
            ->andFilterWhere(['like', 'MODIFIED_BY', $this->MODIFIED_BY])
            ->andFilterWhere(['like', 'FLAG_PINDAH', $this->FLAG_PINDAH])
            ->andFilterWhere(['like', 'EKTP_CURRENT_STATUS_CODE', $this->EKTP_CURRENT_STATUS_CODE])
            ->andFilterWhere(['like', 'EKTP_CREATED_BY', $this->EKTP_CREATED_BY])
            ->andFilterWhere(['like', 'EKTP_UPDATED_BY', $this->EKTP_UPDATED_BY])
            ->andFilterWhere(['like', 'SMS_PHONE', $this->SMS_PHONE]);

        return $dataProvider;
    }
}
