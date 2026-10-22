# 🎯 خطة تحويل المساهمات إلى عقود عمل ريموت (Contracts & Hiring Funnel)

> [!IMPORTANT]
> وصلنا إلى **24 مساهمة برمجية احترافية (Pull Requests)** عبر 7 من أقوى مشاريع الـ Open-Source العالمية الممولة!
> كل المساهمات مدعومة باختبارات hermetic unit tests كاملة وموثقة بدون أي cold DMs أو طلب شغل مباشر — جودة الكود هي التي تتحدث!

---

## 📊 سابقة الأعمال الحالية (24 PRs مفتوحة عبر 7 شركات)

### 1. Langfuse (`langfuse/langfuse`) — [1 PR جديد + أضخم منصة LLM Observability ممولة من YC & Lightspeed]
1. [PR #19210](https://github.com/langfuse/langfuse/pull/19210): `fix(web): preserve chat message role titles on non-generation observations (#19198)` (Fixes #19198)
- **الكود المنفذ:** تم حل مشكلة ظهور عناوين رسائل الـ Chat كـ "Input" بدلاً من اسم الدور (User, Assistant, System, Tool) في الـ Observations التي نوعها `SPAN` أو `AGENT` أو `TOOL`. تم بناء دوال `isExplicitChatMessage` و `isChatConversation` لفحص محتوى الـ I/O ورسائل المحادثات بدقة وتأمين `IOPreviewPretty.tsx` و `ChatMessageList.tsx`، مع إضافة 10 اختبارات Unit Tests في `chatMessageUtils.clienttest.ts` واجتياز 41/41 اختبار بنجاح في 22ms. الـ CLA تم توثيقه بنجاح وأخضر بالكامل!
- **حالة التواصل:** تم تضمين عرض خدمات الـ Contractor ومجالات المساهمة في الـ Frontend/Observability داخل وصف الـ PR وموجهاً للمؤسسين **Marc Klingen** (`@marcklingen`) و **Clemens Rawert** (`@cruessler`).

---

### 2. Cap (`CapSoftware/Cap`) — [4 PRs + بديل Loom الممول من Vercel]
1. [PR #2912](https://github.com/CapSoftware/Cap/pull/2912): `feat(web): add 1.25x playback speed option` (Fixes #2842)
- **الكود المنفذ:** تم إدراج سرعة `1.25x` في مصفوفة `PLAYBACK_SPEEDS` المركزية بـ `apps/web/lib/playback-speed.ts` بترتيب تصاعدي يحافظ على سرعة Cap الافتراضية `1.2x`، ويدمج السرعة تلقائياً في قائمة الـ Player والـ Speed Dial واختصارات الكيبورد وإعدادات الفيديو والمنظمة. تم إنشاء Unit Test Suite مخصص بنسبة نجاح 16/16 واجتياز فحص Biome و TypeScript بنجاح.
- **حالة التواصل:** تم توجيه الكومنت وعرض خدمات الـ Contractor في وصف الـ PR موجهاً للمؤسس **Richie McIlroy** (`@richiemcilroy`).
2. [PR #2926](https://github.com/CapSoftware/Cap/pull/2926): `fix(tooling): dedupe .env in turbo.json and drop deprecated --no-cache from dev:manual` (Fixes #2924)
- **الكود المنفذ:** إزالة التكرار الزائد لـ `.env` من `globalDependencies` في `turbo.json` لمنع حساب الـ hash مرتين، وإسقاط خيار `--no-cache` القديم والـ deprecated من سكربت `dev:manual` في `package.json` لأن إعداد `turbo.json` الافتراضي لـ `dev` هو بالفعل `cache: false`. تم التحقق عبر `turbo run dev --dry=json` بنجاح كامل بدون أي تحذيرات.
3. [PR #2927](https://github.com/CapSoftware/Cap/pull/2927): `fix(tooling): ignore vinxi timestamp sidecars in .gitignore` (Fixes #2923)
- **الكود المنفذ:** إضافة نمط `*.config.timestamp_*.js` إلى `.gitignore` الرئيسي بجوار `.vinxi` لمنع تراكم الملفات الجانبية المؤقتة غير المتتبعة التي يولدها Vinxi (`load-app.js`) عند إيقاف الـ build بـ SIGINT. تم التحقق بنجاح عبر `git check-ignore -v`.
4. [PR #2937](https://github.com/CapSoftware/Cap/pull/2937) & [Issue #2936](https://github.com/CapSoftware/Cap/issues/2936): `fix(web): prevent stale live video snapshot on distant timeline hover (#2936)` (Fixes #2936 / Linear CAP-880)
- **الكود المنفذ:** حل مشكلة الـ UI/UX التي اكتشفها المستخدم بصرياً؛ عند عمل hover بالماوس على شريط التايم لاين، كان الـ tooltip popup يُظهر عنوان الـ Chapter والتوقيت الصحيح (مثلاً 11:07)، لكن صورة الـ Thumbnail في الـ popup كانت دائماً تلتقط لقطة الفريم المفتوح حالياً على الشاشة (مثلاً عند 02:58) متجاهلة موضع الماوس تماماً بسبب تجاهل معامل `_time`. تم بناء دالة `shouldCaptureLiveThumbnail` بحد أقصى لانحراف التوقيت `1.5s`، بحيث يُسمح بالتقاط فريم الشاشة فقط عند الوقوف بجوار الـ Playhead الفعلي، بينما عند الوقوف على أي دقيقة أو Chapter آخر يتم إرجاع `undefined` ليتولى `MediaPlayerSeek` عرض الـ Chapter والوقت بنظافة وأناقة تامة دون فريمات مضللة. تم تدعيم الحل بـ 16/16 اختبار Unit Test بنجاح 100%، وتم تنسيقه واجتياز فحص Biome بالكامل، وربطه آلياً بتذكرة Linear الداخلية CAP-880.

---

### 3. BasedHardware Omi (`BasedHardware/omi`) — [10 PRs باونتي وعقود فورية]
1. [PR #23020](https://github.com/BasedHardware/omi/pull/23020): `fix(chat-sessions): safe chat session deserialization & title validation` (علامة `positive-signal` + `backend`)
2. [PR #23033](https://github.com/BasedHardware/omi/pull/23033): `fix(folders): bulk move deduplication, ID bounds & validation` (علامة `positive-signal` + `backend`)
3. [PR #23047](https://github.com/BasedHardware/omi/pull/23047): `fix(mcp): account for original_text in transcript budget and flag truncation` (Fixes #22806 - مراجعة رسمية وعلامة `positive-signal` من المراجع الأساسي David Zhang)
4. [PR #23050](https://github.com/BasedHardware/omi/pull/23050): `fix(mcp): index saved description on idempotent action item creation` (Fixes #22843 - علامة `positive-signal` + `backend`)
5. [PR #23286](https://github.com/BasedHardware/omi/pull/23286) & [Issue #23287](https://github.com/BasedHardware/omi/issues/23287): `fix(retrieval): harden create_chart_tool input validation, numeric coercion, and configurable resilience` ($50 proposed bounty)
6. [PR #23290](https://github.com/BasedHardware/omi/pull/23290) & [Issue #23292](https://github.com/BasedHardware/omi/issues/23292): `fix(retrieval): harden search_files_tool validation, config resilience, and numeric coercion` ($50 proposed bounty)
7. [PR #23296](https://github.com/BasedHardware/omi/pull/23296) & [Issue #23297](https://github.com/BasedHardware/omi/issues/23297): `fix(retrieval): harden app_tools schema validation, method normalization, and config extraction` ($50 proposed bounty)
8. [PR #23304](https://github.com/BasedHardware/omi/pull/23304) & [Issue #23305](https://github.com/BasedHardware/omi/issues/23305): `fix(retrieval): harden traverse_knowledge_graph_tool validation, hops coercion, and config extraction` ($50 proposed bounty)
9. [PR #23306](https://github.com/BasedHardware/omi/pull/23306) & [Issue #23307](https://github.com/BasedHardware/omi/issues/23307): `fix(retrieval): harden manage_daily_summary_tool validation, hour coercion, and config extraction` ($50 proposed bounty)
10. [PR #23313](https://github.com/BasedHardware/omi/pull/23313): `fix(payment): prevent paid subscriber downgrade when upgrade proration declines (#23301)` (Fixes #23301)
- **الكود المنفذ في PR #23313:** حل مشكلة هبوط المشتركين المدفوعين تلقائياً لخطة مجانية ("Free Plan") في الـ UI عند رفض بطاقة البنك أثناء ترقية الخطة (Cross-plan upgrade). تم إلزام Stripe باستخدام `payment_behavior='error_if_incomplete'` لعمل rollback فوري بدلاً من تحويل الاشتراك إلى `past_due` وحرمان المستخدم من اشتراكه السنوي المدفوع، مع إضافة فحص حالة Subscription دفاعي يمنع المساس بقاعدة البيانات إن لم تكن الحالة نشطة، وتوجيه أخطاء `CardError` برسالة واضحة للمستخدم: "Upgrade payment failed... Your current plan remains active." بدلاً من كراش 500 أو تسريب IDs سرية. تم تدعيم الحل بـ 5 اختبارات Unit Tests في `test_payment_proration_decline_protection.py` واجتياز 13/13 اختبارات بنسبة 100%.

---

### 4. Twenty CRM (`twentyhq/twenty`) — [5 PRs مكتملة]
1. [PR #28412](https://github.com/twentyhq/twenty/pull/28412): `fix(metadata-store): adopt new collection hash on replaceDraft when data is unchanged`
2. [PR #28425](https://github.com/twentyhq/twenty/pull/28425): `fix(record-form): block submission when field input has validation error`
3. [PR #28432](https://github.com/twentyhq/twenty/pull/28432): `fix(workflow): preserve logic function outputs and resolve link output schema`
4. [PR #28460](https://github.com/twentyhq/twenty/pull/28460): `fix(record-picker): prevent lost clicks and enable search enter selection in relation picker`
5. [PR #28513](https://github.com/twentyhq/twenty/pull/28513): `fix(record-picker): use ExtraLarge width for one-to-many relation pickers`
- **حالة التواصل:** تم نشر كومنت طلب الكونتراكت الرسمي على [PR #28513](https://github.com/twentyhq/twenty/pull/28513#issuecomment-6317988402) موجهاً لـ Félix Malfait و Charles Bochet.

---

### 5. Umami Analytics (`umami-software/umami`) — [2 PRs]
1. [PR #4654](https://github.com/umami-software/umami/pull/4654): `feat(settings): move password change to security settings`
2. [PR #4655](https://github.com/umami-software/umami/pull/4655): `fix(cli): add start-env script alias and sanitize port parsing`
- **حالة التواصل:** تم نشر كومنت طلب الكونتراكت على [PR #4655](https://github.com/umami-software/umami/pull/4655#issuecomment-6317992271) موجهاً لـ Mike Cao (`@mikecao`).

---

### 6. Cal.com / Cal.diy (`calcom/cal.diy`) — [1 PR]
1. [PR #30371](https://github.com/calcom/cal.diy/pull/30371): `fix(auth): support space-delimited OAuth2 scopes in authorize view`
- **حالة التواصل:** تم نشر كومنت المراجعة والكونتراكت على [PR #30371](https://github.com/calcom/cal.diy/pull/30371#issuecomment-6317997411).

---

### 7. Activepieces (`activepieces/activepieces`) — [1 PR + تواصل مباشر مع تيم عربي ومصري]
1. [PR #16723](https://github.com/activepieces/activepieces/pull/16723): `fix(connections): support multiple piece filter in project and platform connections` (Fixes #16650)
- **الكود المنفذ:** تم إصلاح الـ DTO Schema في `@activepieces/shared`، وفلترة الـ Backend في `appConnectionService` لدعم الـ `In(pieceName)`، وفلترة الـ Web UI في صفحة الـ Connections عبر `getAll('pieceName')`، مع إضافة Integration Test كامل في `app-connection.test.ts`.
