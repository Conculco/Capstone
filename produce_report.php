<style type="text/css">
  .pagebreak {page-break-after: always;}
</style>

<xsl:for-each select="Order/OrderRows/OrderRow">
    <table class="tabledetails" cellspacing="0" style="table-layout:fixed">
        <tr>
            <td class="tdmargin" />
            <td style="width:70px" align="right" class="blueline">
                <xsl:value-of select="ProductID" />
                <xsl:value-of select="translate(' ', ' ', '&#160;')"/>
            </td>
            <td class="blueline" style="width:220px" >
                <xsl:value-of select="ProductName" />
                <xsl:value-of select="translate(' ', ' ', '&#160;')"/>
            </td>
            <td style="width:50px" align="right" class="blueline">
                <xsl:value-of select="Quantity" />
                <xsl:value-of select="translate(' ', ' ', '&#160;')"/>
            </td>
            <td style="width:50px" align="right" class="blueline">
                <xsl:value-of select="concat('$ ', UnitPrice)" />
                <xsl:value-of select="translate(' ', ' ', '&#160;')"/>
            </td>
            <td style="width:50px" align="right" class="blueline">
                <xsl:value-of select="concat(Discount, ' %')" />
                <xsl:value-of select="translate(' ', ' ', '&#160;')"/>
            </td>
            <td style="width:100px" align="right" class="blueline">
                <xsl:value-of select="concat('$ ', ExtendedPrice)" />
                <xsl:value-of select="translate(' ', ' ', '&#160;')"/>
            </td>
            <td class="tdmargin" />
        </tr>
    </table>
    <xsl:if test="(position() mod 40) = 0 ">
        <!--<span class="code-comment">40 rows per page--></span>
        <xsl:call-template name="Filler">
            <xsl:with-param name="fillercount" select="1" />
        </xsl:call-template>

        <xsl:copy-of select="$ReportFooter" />

        <br class="pagebreak" />

        <xsl:copy-of select="$ReportHeader" />

        <xsl:call-template name="Filler">
            <xsl:with-param name="fillercount" select="1" />
        </xsl:call-template>

        <xsl:copy-of select="$OrderRecipient"/>

        <xsl:call-template name="Filler">
            <xsl:with-param name="fillercount" select="1" />
        </xsl:call-template>

        <xsl:copy-of select="$OrderHeader"/>

        <xsl:call-template name="Filler">
            <xsl:with-param name="fillercount" select="1" />
        </xsl:call-template>

        <xsl:copy-of select="$OrderRowsHeader"/>

    </xsl:if>
</xsl:for-each>