<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerrestreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terrestre', function (Blueprint $table) {
            $table->timestamps();
            $table->string('Voucher',100);
            $table->date('DtFaturam')->nullable();
            $table->date('DtEmissao')->nullable();
            $table->string('Fil',100)->nullable();
            $table->string('Filial',100)->nullable();
            $table->string('Ems',100)->nullable();
            $table->string('Emissor',100)->nullable();
            $table->string('FaturaCli',100)->nullable();
            $table->string('FaturaFor',100)->nullable();
            $table->string('DocCliente',100)->nullable();
            $table->string('NomePax',100)->nullable();
            $table->date('DtEntrada')->nullable();
            $table->date('DtSaida')->nullable();
            $table->string('Contato',100)->nullable();
            $table->string('Descricao_CCusto',100)->nullable();
            $table->string('Depto',100)->nullable();
            $table->string('TpVch',100)->nullable();
            $table->string('FormaPgto',100)->nullable();
            $table->string('TpFat',100)->nullable();
            $table->string('TpFatForn',100)->nullable();
            $table->string('Produto',100)->nullable();
            $table->string('DescricaoProduto',100)->nullable();
            $table->string('M',100)->nullable();
            $table->string('Moeda',100)->nullable();
            $table->string('DtConversao',100)->nullable();
            $table->string('MFor',100)->nullable();
            $table->string('MoedaFor',100)->nullable();
            $table->string('DtConversaoPgto',100)->nullable();
            $table->date('DtVenctoCli')->nullable();
            $table->string('DtVenctoFor',100)->nullable();
            $table->string('DtVenctoSinalFor',100)->nullable();
            $table->string('Categ',100)->nullable();
            $table->string('Cliente',100)->nullable();
            $table->string('TpCli',100)->nullable();
            $table->string('GrupoCli',100)->nullable();
            $table->string('CidadeCli',100)->nullable();
            $table->string('MunicipioCli',100)->nullable();
            $table->string('UFCli',100)->nullable();
            $table->string('EstadoCli',100)->nullable();
            $table->string('Fornecedor',100)->nullable();
            $table->string('TpFor',100)->nullable();
            $table->string('GrupoFor',100)->nullable();
            $table->string('CidadeFor',100)->nullable();
            $table->string('MunicipioFor',100)->nullable();
            $table->string('UFFor',100)->nullable();
            $table->string('EstadorFor',100)->nullable();
            $table->string('Operadora',100)->nullable();
            $table->string('TpOper',100)->nullable();
            $table->string('GrupoOper',100)->nullable();
            $table->string('CidadeOper',100)->nullable();
            $table->string('MunicipioOper',100)->nullable();
            $table->string('UFOper',100)->nullable();
            $table->string('EstadoOper',100)->nullable();
            $table->string('NroPax',100)->nullable();
            $table->string('CambioCli',100)->nullable();
            $table->string('CambioFor',100)->nullable();
            $table->decimal('VlUnitario',10,2)->nullable();
            $table->decimal('Tarifa',10,2)->nullable();
            $table->decimal('Taxas',10,2)->nullable();
            $table->decimal('OutServs',10,2)->nullable();
            $table->decimal('OutTaxas',10,2)->nullable();
            $table->decimal('VlTotal',10,2)->nullable();
            $table->string('ComisRep',100)->nullable();
            $table->string('IncentRep',100)->nullable();
            $table->string('Sinal',100)->nullable();
            $table->string('Saldo',100)->nullable();
            $table->string('ComisFor',100)->nullable();
            $table->string('IncentFor',100)->nullable();
            $table->decimal('VlPagar',10,2)->nullable();
            $table->string('SinalFor',100)->nullable();
            $table->integer('UnidCobr')->nullable();
            $table->string('DifTarifa',100)->nullable();
            $table->string('Empresa',100)->nullable();
            $table->string('Obs1',100)->nullable();
            $table->string('Obs2',100)->nullable();
            $table->string('Obs3',100)->nullable();
            $table->string('TarSugeridaUnit',100)->nullable();
            $table->string('TarNormalUnit',100)->nullable();
            $table->string('VlCredCartao',100)->nullable();
            $table->string('Representante',100)->nullable();
            $table->string('SiglaFor',100)->nullable();
            $table->string('EmailCentCusto',100)->nullable();
            $table->string('TarNormalTot',100)->nullable();
            $table->string('TarSugeridaTot',100)->nullable();
            $table->string('CodigoCli',100)->nullable();
            $table->string('CodigoFor',100)->nullable();
            $table->string('Obs4',100)->nullable();
            $table->string('Servicos05',100)->nullable();
            $table->string('Servicos06',100)->nullable();
            $table->string('Servicos07',100)->nullable();
            $table->string('Servicos08',100)->nullable();
            $table->string('Servicos09',100)->nullable();
            $table->string('Servicos10',100)->nullable();
            $table->string('FeeCli',100)->nullable();
            $table->string('Servicos11',100)->nullable();
            $table->string('Servicos12',100)->nullable();
            $table->string('Servicos13',100)->nullable();
            $table->string('Servicos14',100)->nullable();
            $table->string('Servicos15',100)->nullable();
            $table->string('Servicos16',100)->nullable();
            $table->string('Servicos17',100)->nullable();
            $table->string('Servicos18',100)->nullable();
            $table->string('Servicos19',100)->nullable();
            $table->string('Servicos20',100)->nullable();
            $table->string('Divisao',100)->nullable();
            $table->string('Alerta_O1',100)->nullable();
            $table->string('Alerta_O2',100)->nullable();
            $table->string('Alerta_O3',100)->nullable();
            $table->string('Alerta_O4',100)->nullable();
            $table->string('Alerta_O5',100)->nullable();
            $table->string('Alerta_O6',100)->nullable();
            $table->string('Alerta_O7',100)->nullable();
            $table->string('Alerta_de_Data',100)->nullable();
            $table->string('Alerta_Tarifa_Zerada',100)->nullable();
            $table->string('Alerta_Valor_Pago',100)->nullable();
            $table->string('Alerta_Diaria',100)->nullable();
            $table->string('Alerta_Data_Entrada',100)->nullable();
            $table->string('Alerta_Data_Saida',100)->nullable();
            $table->string('Alerta_Tipo',100)->nullable();
            $table->string('Alerta_Geral',100)->nullable();
            $table->integer('Diaria_Calculo')->nullable();
            $table->string('lider',100)->nullable();
            $table->string('coordenador',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terrestre');
    }
}
